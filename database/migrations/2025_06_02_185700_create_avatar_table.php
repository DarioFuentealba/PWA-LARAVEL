<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
        Schema::create('avatar', function (Blueprint $table) {
            $table->bigIncrements('id_avatar');
            $table->string('nombre');
            $table->binary('imagen'); //o $table->mediumBlob('imagen') si es grande
            $table->timestamps(); //opcional, útil para saber cuándo se creó/actualizó
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatar');
    }
};
