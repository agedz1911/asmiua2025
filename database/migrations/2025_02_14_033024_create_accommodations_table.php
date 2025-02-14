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
        Schema::create('accommodations', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name')->nullable();
            $table->string('distance')->nullable();
            $table->unsignedBigInteger('hotel_star')->nullable();
            $table->unsignedBigInteger('idr_price')->nullable();
            $table->unsignedBigInteger('usd_price')->nullable();
            $table->string('url')->nullable();
            $table->string('image')->nullable();
            $table->string('tag')->nullable();
            $table->unsignedBigInteger('no_urut')->nullable();
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accommodations');
    }
};
