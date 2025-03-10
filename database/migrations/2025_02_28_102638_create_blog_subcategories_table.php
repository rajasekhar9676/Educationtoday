<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('blog_subcategories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('blog_categories')->onDelete('cascade');
            $table->string('name');
            $table->string('meta_title')->nullable();
            $table->string('meta_banner')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('subcategory_url')->nullable();
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('blog_subcategories');
    }
};


