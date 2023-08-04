<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50);
            $table->string('cnpj', 14);
            $table->string('uf', 2);
            $table->string('email', 150);
            $table->string('site', 150)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        // Criando coluna em Produtos para receber a Fk de Fornecedores
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('fornecedor_id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Removendo a Fk e a coluna
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign('produtos_fornecedor_id_foreign');
            $table->dropColumn('fornecedor_id');
        });

        Schema::dropIfExists('fornecedores');
    }
}
