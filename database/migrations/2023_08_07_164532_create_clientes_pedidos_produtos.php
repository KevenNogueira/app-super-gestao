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
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('nome', 50);
            $table->string('cpf', 11)->primary();
            $table->string('email', 100);
            $table->string('telefone', 20);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('pedidos', function (Blueprint $table) {
            $table->string('cliente_cpf', 11);
            $table->integer('num_pedido')->primary();
            $table->timestamps();

            $table->foreign('cliente_cpf')->references('cpf')->on('clientes');
        });

        Schema::create('pedidos_produtos', function (Blueprint $table) {
            $table->id();
            $table->integer('num_pedido');
            $table->unsignedBigInteger('produto_id');
            $table->timestamps();

            $table->foreign('num_pedido')->references('num_pedido')->on('pedidos');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::disableForeignKeyConstraints(); // Desabilita as Constraints do banco
        Schema::dropIfExists('pedidos_produtos');
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('clientes');
        Schema::enableForeignKeyConstraints(); // Reabilita as Constraints do banco
    }
};
