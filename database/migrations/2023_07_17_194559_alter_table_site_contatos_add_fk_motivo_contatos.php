<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Adicionando a coluna motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id')->after('email');
        });

        // Movendo o conteudo da coluna motivo_contato para motivo_contatos_id
        DB::statement('UPDATE site_contatos SET motivo_contatos_id = motivo_contato');

        // Criação da FK e remoção da coluna motivo_contato
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Criação  da coluna motivo_contato remoção da FK
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->integer('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });

        // Movendo o conteudo da coluna motivo_contatos_id para motivo_contato
        DB::statement('UPDATE site_contatos SET motivo_contato = motivo_contatos_id');

        // Removendo a coluna motivo_contatos_id
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropColumn('motivo_contatos_id');
        });
    }
};