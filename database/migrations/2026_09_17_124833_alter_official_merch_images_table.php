<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('official_merch_images', function (Blueprint $table) {
            $table->json('images')->nullable()->after('id');
            $table->string('style')->default('banner')->after('link');
            $table->dropColumn(['image', 'orientation']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('official_merch_images', function (Blueprint $table) {
            $table->string('image')->nullable();
            $table->string('orientation')->default('horizontal');
            $table->dropColumn(['images', 'style']);
        });
    }
};
