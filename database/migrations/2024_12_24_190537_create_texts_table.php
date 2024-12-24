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
            $table->text('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->text('title2')->nullable();
            $table->text('subtitle2')->nullable();
            $table->text('description2')->nullable();
            $table->text('title3')->nullable();
            $table->text('subtitle2')->nullable();
            $table->text('description3')->nullable();
            $table->text('title4')->nullable();
            $table->text('subtitle2')->nullable();
            $table->text('description4')->nullable();
            $table->text('title5')->nullable();
            $table->text('subtitle2')->nullable();
            $table->text('description5')->nullable();
            $table->text('title6')->nullable();
            $table->text('subtitle2')->nullable();
            $table->text('description6')->nullable();
            $table->text('title7')->nullable();
            $table->text('subtitle2')->nullable();
            $table->text('description7')->nullable();
            $table->string('');
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
