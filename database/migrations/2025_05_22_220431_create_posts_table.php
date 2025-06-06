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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('image')->default('romana.png');
            $table->string('content')->default('Historia');
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->id(); //id autoincremental.
            $table->foreignId('user_id')->default('1')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->default('1')->constrained()->onDelete('cascade');
            $table->string('title'); //Titulo
            $table->string('poster'); //Imagen o autor.
            $table->boolean('habilitated')->default(false); //Habilitado, por defecto es falso.
            $table->text('content'); //Contenido largo.
            $table->timestamps(); //created_at y updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('categories');
    }
};
