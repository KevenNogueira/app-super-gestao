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
        Schema::create('un_medida_massas', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5);
            $table->string('descricao', 30);
            $table->timestamps();
        });

        // Adicionar o relacionamento com a tabela produtos]
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('un_medida_massa_id')->after('peso');
            $table->foreign('un_medida_massa_id')->references('id')->on('un_medida_massas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //remover o relacionamento com a tabela produtos
        Schema::table('produtos', function (Blueprint $table) {
            //remover a fk
            $table->dropForeign('produtos_un_medida_massa_id_foreign'); //[table]_[coluna]_foreign
            //remover a coluna un_medida_massas -> FK
            $table->dropColumn('un_medida_massa_id');
        });

        Schema::dropIfExists('un_medida_massas');
    }
};
