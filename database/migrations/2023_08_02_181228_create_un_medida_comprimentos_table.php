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
        Schema::create('un_medida_comprimentos', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        // Adicionar o relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('un_medida_comprimento_id')->after('altura');
            $table->foreign('un_medida_comprimento_id')->references('id')->on('un_medida_comprimentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remover o relacionamento com a tabela produto_detalhes
        Schema::table('produtos', function (Blueprint $table) {
            // Remover a fk
            $table->dropForeign('produtos_un_medida_comprimento_id_foreign'); //[table]_[coluna]_foreign
            // Remover a coluna unidade_id
            $table->dropColumn('un_medida_comprimento_id');
        });

        Schema::dropIfExists('un_medida_comprimentos');
    }
};
