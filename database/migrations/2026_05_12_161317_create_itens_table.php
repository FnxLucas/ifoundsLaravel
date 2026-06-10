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
        Schema::create('itens', function (Blueprint $table) {

            $table->id();
            
            $table->foreignId('usuario_encontrou_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('usuario_reivindicante_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('nome',500);
            $table->string('localizacao',500)->isNotEmpty();
            $table->text('descricao');
            $table->string('quemAchou',500)->default(null)->nullable(true);
            $table->string('img')->default('placeHolder.jpg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens');
    }
};
