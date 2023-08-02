<?php

namespace Database\Seeders;

use App\Models\UnMedidaComprimento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnMedidaComprimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnMedidaComprimento::create([
            'unidade' => 'm',
            'descricao' => 'Metro',
        ]);

        UnMedidaComprimento::create([
            'unidade' => 'km',
            'descricao' => 'Quilômetro ',
        ]);

        UnMedidaComprimento::create([
            'unidade' => 'hm',
            'descricao' => 'Hectômetro ',
        ]);

        UnMedidaComprimento::create([
            'unidade' => 'dam',
            'descricao' => 'Decâmetro',
        ]);

        UnMedidaComprimento::create([
            'unidade' => 'dm',
            'descricao' => 'Decímetro',
        ]);

        UnMedidaComprimento::create([
            'unidade' => 'cm',
            'descricao' => 'Centímetro',
        ]);

        UnMedidaComprimento::create([
            'unidade' => 'mm',
            'descricao' => 'Milímetro',
        ]);
    }
}
