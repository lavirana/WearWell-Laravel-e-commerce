<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');                  // Blog Title
            $table->string('slug')->unique();         // SEO friendly URL
            $table->string('category')->nullable();   // Blog Category (Fashion, Tech, etc.)
            $table->string('image')->nullable();      // Blog Image (store path or URL)
            $table->date('publish_date')->nullable(); // Publish Date
            $table->text('short_description')->nullable(); // Short description/summary
            $table->longText('content')->nullable();  // Full blog content
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
