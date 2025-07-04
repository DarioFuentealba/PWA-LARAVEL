<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('avatar');
        });
    }

    public function down(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->string('avatar')->nullable(); // Usá el tipo original que tenía
        });
    }
};
