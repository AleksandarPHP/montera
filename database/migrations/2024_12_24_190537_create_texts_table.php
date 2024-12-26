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
        Schema::create('texts', function (Blueprint $table) {
            $table->id();
            $table->json('meta_title')->nullable();
            $table->json('meta_description')->nullable();
            $table->json('title')->nullable();
            $table->json('subtitle')->nullable();
            $table->json('description')->nullable();
            $table->json('title2')->nullable();
            $table->json('subtitle2')->nullable();
            $table->json('description2')->nullable();
            $table->json('title3')->nullable();
            $table->json('subtitle3')->nullable();
            $table->json('description3')->nullable();
            $table->json('title4')->nullable();
            $table->json('subtitle4')->nullable();
            $table->json('description4')->nullable();
            $table->json('title5')->nullable();
            $table->json('subtitle5')->nullable();
            $table->json('description5')->nullable();
            $table->json('title6')->nullable();
            $table->json('subtitle6')->nullable();
            $table->json('description6')->nullable();
            $table->json('title7')->nullable();
            $table->json('subtitle7')->nullable();
            $table->json('description7')->nullable();
            $table->text('image')->nullable();
            $table->text('image2')->nullable();
            $table->text('image3')->nullable();
            $table->text('image4')->nullable();
            $table->text('image5')->nullable();
            $table->text('image6')->nullable();
            $table->text('image7')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('texts');
    }
};
