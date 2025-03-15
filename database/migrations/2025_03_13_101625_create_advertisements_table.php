<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('image'); // Stores ad image
            $table->enum('type', ['banner', 'voting_survey', 'subscription', 'myschooladmission']); // Ad type
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('advertisements');
    }
};

