<?php

namespace Database\Seeders;

use App\Models\PedidoProduto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PedidoProduto::create([
            'num_pedido' => 726837,
            'produto_id' => 5,
        ]);

        PedidoProduto::create([
            'num_pedido' => 313261,
            'produto_id' => 6,
        ]);

        PedidoProduto::create([
            'num_pedido' => 726837,
            'produto_id' => 3,
        ]);

        PedidoProduto::create([
            'num_pedido' => 726837,
            'produto_id' => 1,
        ]);

        PedidoProduto::create([
            'num_pedido' => 252983,
            'produto_id' => 7,
        ]);

        PedidoProduto::create([
            'num_pedido' => 313261,
            'produto_id' => 5,
        ]);

        PedidoProduto::create([
            'num_pedido' => 726837,
            'produto_id' => 6,
        ]);

        PedidoProduto::create([
            'num_pedido' => 252983,
            'produto_id' => 3,
        ]);

        PedidoProduto::create([
            'num_pedido' => 726837,
            'produto_id' => 1,
        ]);

        PedidoProduto::create([
            'num_pedido' => 252983,
            'produto_id' => 7,
        ]);
    }
}
