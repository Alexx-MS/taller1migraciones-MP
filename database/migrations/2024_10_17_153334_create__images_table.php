<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('_images', function (Blueprint $table) {
            $table->id();
            $table->varchar('url',45);
            $table->varchar('imageable',45);
            $table->varchar('imageable_type',45);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('_images');
    }
};
