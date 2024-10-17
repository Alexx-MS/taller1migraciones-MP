<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('_users', function (Blueprint $table) {
            $table->id();
            $table->varchar('name',45);
            $table->varchar('email',45);
            $table->varchar('password',45);
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('_users');
    }
};
