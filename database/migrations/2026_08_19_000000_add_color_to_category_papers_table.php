<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('category_papers', function (Blueprint $table) {
            $table->string('color')->default('gray')->after('name');
        });

        DB::table('category_papers')->where('name', 'Podium Presentation')->update(['color' => 'success']);
        DB::table('category_papers')->where('name', 'Moderated e-Poster')->update(['color' => 'info']);
        DB::table('category_papers')->where('name', 'Unmoderated Poster')->update(['color' => 'warning']);
    }

    public function down(): void
    {
        Schema::table('category_papers', function (Blueprint $table) {
            $table->dropColumn('color');
        });
    }
};