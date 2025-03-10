<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('blog_categories')->onDelete('cascade');
            $table->foreignId('subcategory_id')->nullable()->constrained('blog_subcategories')->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->string('banner')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('banner_source');
            // $table->string('meta_title')->nullable();
            // $table->text('meta_keywords')->nullable();
            // $table->text('meta_description')->nullable();
            $table->longText('content'); // Blog Content
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
};




