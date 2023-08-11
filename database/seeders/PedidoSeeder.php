<?php

namespace Database\Seeders;

use App\Models\Pedido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pedido::create([
            'num_pedido' => 726837,
            'cliente_cpf' => '17113015662',
        ]);

        Pedido::create([
            'num_pedido' => 813609,
            'cliente_cpf' => '40946771600',
        ]);

        Pedido::create([
            'num_pedido' => 185196,
            'cliente_cpf' => '44223936425',
        ]);

        Pedido::create([
            'num_pedido' => 252983,
            'cliente_cpf' => '89355813481',
        ]);

        Pedido::create([
            'num_pedido' => 864649,
            'cliente_cpf' => '44223936425',
        ]);

        Pedido::create([
            'num_pedido' => 611119,
            'cliente_cpf' => '89355813481',
        ]);

        Pedido::create([
            'num_pedido' => 313261,
            'cliente_cpf' => '40946771600',
        ]);

        Pedido::create([
            'num_pedido' => 300067,
            'cliente_cpf' => '89355813481',
        ]);

        Pedido::create([
            'num_pedido' => 289741,
            'cliente_cpf' => '17113015662',
        ]);

        Pedido::create([
            'num_pedido' => 881421,
            'cliente_cpf' => '44223936425',
        ]);
    }
}
