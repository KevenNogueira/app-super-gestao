<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::create([
            'nome' => 'Cadeira de Escritório Secretária Base',
            'descricao' => 'Cromada com Rodinha Fortt Lisboa Preta - CSF02-P',
            'peso' => 8.0,
            'fornecedor_id' => 8,
            'un_medida_massa_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Cadeira Escritório Presidente',
            'descricao' => 'Atlanta Duoffice Preta Comfort DU500A',
            'peso' => 15.0,
            'fornecedor_id' => 2,
            'un_medida_massa_id' => 1,
        ]);

        Produto::create([
            'nome' => 'YAMASORO Cadeira de Escritório',
            'descricao' => 'Ângulo do Apoio Lombar Ajustável Cadeira Gamer Ergonomica com Braço Ajustável e Sistema Relaxar, Azul',
            'peso' => 17.25,
            'fornecedor_id' => 1,
            'un_medida_massa_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Escrivaninha Trevalla Kuadra',
            'descricao' => 'Me150-E10 Industrial 150cm Preto Onix',
            'peso' => 16.54,
            'fornecedor_id' => 1,
            'un_medida_massa_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Mesa para Computador Gamer e Painel Tv',
            'descricao' => 'Marca Madesa material de mdf com compressão a vácuo, gerando grande resistência',
            'peso' => 56.6,
            'fornecedor_id' => 17,
            'un_medida_massa_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Clamper Energia',
            'descricao' => '5 tomadas com botão liga e desliga',
            'peso' => 350.0,
            'fornecedor_id' => 20,
            'un_medida_massa_id' => 4,
        ]);

        Produto::create([
            'nome' => 'WAP Trena Digital A Laser',
            'descricao' => 'Tlp 40 Painel Iluminado E Cordão Para Pulso',
            'peso' => 70,
            'fornecedor_id' => 20,
            'un_medida_massa_id' => 4,
        ]);

        Produto::create([
            'nome' => 'Fire TV Stick',
            'descricao' => 'Streaming em Full HD com Alexa | Com Controle Remoto por Voz com Alexa (inclui comandos de TV)',
            'peso' => 32,
            'fornecedor_id' => 5,
            'un_medida_massa_id' => 4,
        ]);

        Produto::create([
            'nome' => 'Suporte Articulado de Parede para TV',
            'descricao' => 'Ajuste Livre, Adequado para TVs de 14 a 42 Polegadas, Suporta um Peso Máximo de 30 Quilogramas',
            'peso' => 1.5,
            'fornecedor_id' => 6,
            'un_medida_massa_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Celular Xiaomi Redmi Note 12',
            'descricao' => '128GB / 6GB RAM/Dual Sim/TelaP e 13MP - Onyx Gray - Preto',
            'peso' => 184,
            'fornecedor_id' => 3,
            'un_medida_massa_id' => 4,
        ]);

        Produto::create([
            'nome' => 'Chapa Cerâmica Preta - Taiff',
            'descricao' => 'Bivolt, 180ºC com revestimento de cerâmica e cabo com tamanho de 1,8m',
            'peso' => 294,
            'fornecedor_id' => 2,
            'un_medida_massa_id' => 4,
        ]);

        Produto::create([
            'nome' => 'SSD Western Digital WD Green',
            'descricao' => 'PC SN350 NVMe SSD 240GB, PRETO, WDS240G2G0C, 240 GB',
            'peso' => 142,
            'fornecedor_id' => 9,
            'un_medida_massa_id' => 4,
        ]);

        Produto::create([
            'nome' => 'Edredom Solteiro Paris Soft',
            'descricao' => 'Dupla face Preto',
            'peso' => 1.6,
            'fornecedor_id' => 12,
            'un_medida_massa_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
            'descricao' => 'English Edition - 1214 pages',
            'peso' => 120,
            'fornecedor_id' => 12,
            'un_medida_massa_id' => 4,
        ]);

        Produto::create([
            'nome' => 'Pasta Térmica Thermal Silver',
            'descricao' => 'Seringa 5G Prata Implastec',
            'peso' => 20,
            'fornecedor_id' => 16,
            'un_medida_massa_id' => 4,
        ]);

        Produto::create([
            'nome' => 'Whisky Johnnie Walker Black Label',
            'descricao' => '2 anos, 750ml, a embalagem pode variar',
            'peso' => 750,
            'fornecedor_id' => 20,
            'un_medida_massa_id' => 14,
        ]);
    }
}
