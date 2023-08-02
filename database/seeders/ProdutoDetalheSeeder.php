<?php

namespace Database\Seeders;

use App\Models\ProdutoDetalhe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoDetalheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProdutoDetalhe::create([
            'produto_id' => 1,
            'comprimento' => 53,
            'largura' => 50,
            'altura' => 25,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 2,
            'comprimento' => 52,
            'largura' => 52,
            'altura' => 120,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 3,
            'comprimento' => 52,
            'largura' => 50,
            'altura' => 119,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 4,
            'comprimento' => 60,
            'largura' => 150,
            'altura' => 75,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 5,
            'comprimento' => 60,
            'largura' => 136,
            'altura' => 75,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 6,
            'comprimento' => 16,
            'largura' => 11,
            'altura' => 2,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 7,
            'comprimento' => 11,
            'largura' => 4.6,
            'altura' => 2.5,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 8,
            'comprimento' => 86,
            'largura' => 30,
            'altura' => 13,
            'un_medida_comprimento_id' => 7
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 9,
            'comprimento' => 28,
            'largura' => 23,
            'altura' => 6.5,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 10,
            'comprimento' => 17.9,
            'largura' => 9,
            'altura' => 5.9,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 11,
            'comprimento' => 31,
            'largura' => 29,
            'altura' => 29,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 12,
            'comprimento' => 8,
            'largura' => 2.21,
            'altura' => 0.23,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 13,
            'comprimento' => 30,
            'largura' => 30,
            'altura' => 30,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 14,
            'comprimento' => 2.03,
            'largura' => 17.53,
            'altura' => 22.86,
            'un_medida_comprimento_id' => 6
        ]);

        ProdutoDetalhe::create([
            'produto_id' => 15,
            'comprimento' => 3,
            'largura' => 3,
            'altura' => 18,
            'un_medida_comprimento_id' => 6
        ]);
    }
}
