<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('seo_meta', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title');
            $table->text('meta_description');
            $table->text('meta_keywords');
            $table->morphs('seoable'); // Creates seoable_id and seoable_type columns
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seo_meta');
    }
};

