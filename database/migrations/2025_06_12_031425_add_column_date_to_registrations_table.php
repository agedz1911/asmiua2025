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
        Schema::table('registrations', function (Blueprint $table) {
            $table->date('date_early_bird')->after('early_bird_reg')->nullable();
            $table->date('date_normal_reg')->after('normal_reg')->nullable();
            $table->date('date_onsite')->after('onsite_reg')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn('date_early_bird');
            $table->dropColumn('date_normal_reg');
            $table->dropColumn('date_onsite');
        });
    }
};
