<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('_posts', function (Blueprint $table) {
            $table->id();
            $table->varchar('name',45);
            $table->varchar('slug',45);
            $table->varchar('extract',45);
            $table->varchar('body',45);
            $table->varchar('status',45);
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('_posts');
    }
};
