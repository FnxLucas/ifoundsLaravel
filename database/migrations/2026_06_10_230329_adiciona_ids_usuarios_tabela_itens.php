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
        Schema::table('itens', function (Blueprint $table) {
            $table->foreignId('usuario_encontrou_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignId('usuario_reivindicante_id')->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('itens', function (Blueprint $table) {
            $table->dropForeign(['usuario_encontrou_id']);
            $table->dropForeign(['usuario_reivindicante_id']);
            $table->dropColumn(['usuario_encontrou_id', 'usuario_reivindicante_id']);
        });
    }
};
