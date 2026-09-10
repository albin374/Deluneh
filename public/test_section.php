<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$s = new App\Models\HomeSection();
$s->name = 'Test Filter';
$s->section_type = 'product';
$s->layout_style = 'product_filter';
$s->product_ids = [1,2,3,4,5];
$s->status = 1;
$s->order = 99;
$s->save();
echo "Created: " . $s->id;
