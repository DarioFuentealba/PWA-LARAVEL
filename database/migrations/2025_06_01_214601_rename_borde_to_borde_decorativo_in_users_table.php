<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    public function up(): void{
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('borde', 'borde_decorativo');
        });
    }

    public function down(): void{
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('borde_decorativo', 'borde');
        });
    }
};
