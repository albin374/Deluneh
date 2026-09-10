<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class MigrateCategoryHierarchy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'category:migrate-hierarchy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Migrate existing flat categories to a hierarchical structure';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting category hierarchy migration...');

        // Create Roots
        $men = Category::firstOrCreate(['slug' => 'men'], ['name' => 'Men']);
        $women = Category::firstOrCreate(['slug' => 'women'], ['name' => 'Women']);
        $kids = Category::firstOrCreate(['slug' => 'kids'], ['name' => 'Kids']);

        $roots = [
            'Men' => $men,
            'Women' => $women,
            'Kids' => $kids
        ];

        // Ensure sub roots for each
        $subRoots = ['Clothing', 'Footwear', 'Bags'];
        $categoriesMap = [];

        foreach ($roots as $rootName => $rootNode) {
            foreach ($subRoots as $subRoot) {
                $slug = strtolower($rootName) . '-' . strtolower($subRoot);
                $node = Category::firstOrCreate(
                    ['slug' => $slug],
                    ['name' => $subRoot, 'parent_id' => $rootNode->id]
                );
                // Update parent_id if it already existed flat
                if ($node->parent_id !== $rootNode->id) {
                    $node->parent_id = $rootNode->id;
                    $node->save();
                }
                $categoriesMap[$rootName][$subRoot] = $node;
            }
        }

        // Now find other flat categories and organize them based on keyword heuristics
        $flatCategories = Category::whereNull('parent_id')
            ->whereNotIn('id', [$men->id, $women->id, $kids->id])
            ->get();

        foreach ($flatCategories as $cat) {
            $name = strtolower($cat->name);
            $parent = null;

            // Determine Main Category
            if (str_contains($name, 'men') && !str_contains($name, 'women')) {
                $main = 'Men';
            } elseif (str_contains($name, 'women') || str_contains($name, 'ladies') || str_contains($name, 'girl')) {
                $main = 'Women';
            } elseif (str_contains($name, 'kid') || str_contains($name, 'boy')) {
                $main = 'Kids';
            } else {
                // If ambiguous, leave it as root, or you could default to Men.
                // We'll leave it as root so we don't assume incorrectly.
                continue;
            }

            // Determine Sub Category
            if (str_contains($name, 'shoe') || str_contains($name, 'sneaker') || str_contains($name, 'sandal') || str_contains($name, 'chappal') || str_contains($name, 'footwear') || str_contains($name, 'heel') || str_contains($name, 'flat') || str_contains($name, 'slipper')) {
                $sub = 'Footwear';
            } elseif (str_contains($name, 'bag') || str_contains($name, 'backpack')) {
                $sub = 'Bags';
            } else {
                // Default to clothing for shirts, jeans, etc.
                $sub = 'Clothing';
            }

            if (isset($categoriesMap[$main][$sub])) {
                $cat->parent_id = $categoriesMap[$main][$sub]->id;
                
                // Clean up the name (e.g. "Men Utility TShirts" -> "Utility TShirts")
                $newName = trim(str_ireplace([$main, $sub], '', $cat->name));
                if (empty($newName)) {
                    $newName = $cat->name; // fallback if it becomes empty
                }
                $cat->name = $newName;

                // Optionally you can keep the original slug, or regenerate it.
                // It's safer to keep the original slug so links don't break.
                
                $cat->save();
                $this->info("Moved '{$cat->slug}' under {$main} -> {$sub}");
            }
        }

        $this->info('Migration completed successfully!');
    }
}
