<?php

namespace Database\Seeders;

use App\Models\UnMedidaMassa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnMedidaMassaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnMedidaMassa::create([
            'unidade' => 'kg',
            'descricao' => 'Quilograma',
        ]);

        UnMedidaMassa::create([
            'unidade' => 'hg',
            'descricao' => 'Hectograma',
        ]);

        UnMedidaMassa::create([
            'unidade' => 'dag',
            'descricao' => 'Decagrama',
        ]);

        UnMedidaMassa::create([
            'unidade' => 'g',
            'descricao' => 'Grama',
        ]);

        UnMedidaMassa::create([
            'unidade' => 'dg',
            'descricao' => 'Decigrama',
        ]);

        UnMedidaMassa::create([
            'unidade' => 'cg',
            'descricao' => 'Centigrama',
        ]);

        UnMedidaMassa::create([
            'unidade' => 'mg',
            'descricao' => 'Miligrama',
        ]);
    }
}
