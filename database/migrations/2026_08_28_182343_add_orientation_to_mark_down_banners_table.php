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
        Schema::table('mark_down_banners', function (Blueprint $table) {
            $table->string('orientation')->default('horizontal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mark_down_banners', function (Blueprint $table) {
            $table->dropColumn('orientation');
        });
    }
};
