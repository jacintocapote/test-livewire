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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('filepath');
            $table->string('alt');
            $table->morphs('imageable');
            //$table->unsignedBigInteger('imageable_id');
            //$table->string('imageable_type');
            //$table->unsignedBigInteger('car_id');
            //$table->unsignedBigInteger('author_id');
            //$table->unsignedBigInteger('post_id');
            //$table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            //$table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
            //$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
