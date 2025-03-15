<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('panel_discussions', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->text('content');
            $table->string('video')->nullable(); // Video file or embed URL
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('panel_discussions');
    }
};
