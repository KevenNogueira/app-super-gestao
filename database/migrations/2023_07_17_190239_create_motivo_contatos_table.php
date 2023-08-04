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
        Schema::create('motivo_contatos', function (Blueprint $table) {
            $table->id();
            $table->string('motivo_contato', 20);
            $table->timestamps();
        });

        // Adicionando a coluna motivo_contatos_id | Criação da FK
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id')->after('email');
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remoção da FK | Removendo a coluna motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
            $table->dropColumn('motivo_contatos_id');
        });

        Schema::dropIfExists('motivo_contatos');
    }
};
