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
        Schema::create('schedule_papers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('category_papers')->onDelete('cascade');
            $table->string('code_abstract');
            $table->string('name_participant');
            $table->string('title')->nullable();
            $table->string('institution')->nullable();
            $table->string('country')->nullable();
            $table->date('date_presenter')->nullable();
            $table->string('time_presenter')->nullable();
            $table->string('room')->nullable();
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_papers');
    }
};
