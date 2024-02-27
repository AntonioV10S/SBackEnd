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
        Schema::create('sentencia', function (Blueprint $table) {
            $table->id();
            $table->integer('condena');
            $table->integer('multa');
            $table->foreignId('id_ladron')->constrained('ladron');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sentencia');
    }
};
