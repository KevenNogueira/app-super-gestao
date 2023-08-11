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
            'fornecedor_cnpj' => '05895455000136',
            'nome' => 'Cadeira de Escritório Secretária Base',
            'descricao' => 'Cromada com Rodinha Fortt Lisboa Preta - CSF02-P',
            'peso' => 8.0,
            'un_medida_massa_id' => 1,
            'comprimento' => 53,
            'largura' => 50,
            'altura' => 25,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '32229732000144',
            'nome' => 'Cadeira Escritório Presidente',
            'descricao' => 'Atlanta Duoffice Preta Comfort DU500A',
            'peso' => 15.0,
            'un_medida_massa_id' => 1,
            'comprimento' => 52,
            'largura' => 52,
            'altura' => 120,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '32229732000144',
            'nome' => 'YAMASORO Cadeira de Escritório',
            'descricao' => 'Ângulo do Apoio Lombar Ajustável Cadeira Gamer Ergonomica com Braço Ajustável e Sistema Relaxar, Azul',
            'peso' => 17.25,
            'un_medida_massa_id' => 1,
            'comprimento' => 52,
            'largura' => 50,
            'altura' => 119,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '35011095000123',
            'nome' => 'Escrivaninha Trevalla Kuadra',
            'descricao' => 'Me150-E10 Industrial 150cm Preto Onix',
            'peso' => 16.54,
            'un_medida_massa_id' => 1,
            'comprimento' => 60,
            'largura' => 150,
            'altura' => 75,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '05895455000136',
            'nome' => 'Mesa para Computador Gamer e Painel Tv',
            'descricao' => 'Marca Madesa material de mdf com compressão a vácuo, gerando grande resistência',
            'peso' => 56.6,
            'un_medida_massa_id' => 1,
            'comprimento' => 60,
            'largura' => 136,
            'altura' => 75,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '35011095000123',
            'nome' => 'Clamper Energia',
            'descricao' => '5 tomadas com botão liga e desliga',
            'peso' => 350.0,
            'un_medida_massa_id' => 4,
            'comprimento' => 16,
            'largura' => 11,
            'altura' => 2,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '05895455000136',
            'nome' => 'WAP Trena Digital A Laser',
            'descricao' => 'Tlp 40 Painel Iluminado E Cordão Para Pulso',
            'peso' => 70,
            'un_medida_massa_id' => 4,
            'comprimento' => 11,
            'largura' => 4.6,
            'altura' => 2.5,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '78055328000100',
            'nome' => 'Fire TV Stick',
            'descricao' => 'Streaming em Full HD com Alexa | Com Controle Remoto por Voz com Alexa (inclui comandos de TV)',
            'peso' => 32,
            'un_medida_massa_id' => 4,
            'comprimento' => 86,
            'largura' => 30,
            'altura' => 13,
            'un_medida_comprimento_id' => 7
        ]);

        Produto::create([
            'fornecedor_cnpj' => '78055328000100',
            'nome' => 'Suporte Articulado de Parede para TV',
            'descricao' => 'Ajuste Livre, Adequado para TVs de 14 a 42 Polegadas, Suporta um Peso Máximo de 30 Quilogramas',
            'peso' => 1.5,
            'un_medida_massa_id' => 1,
            'comprimento' => 28,
            'largura' => 23,
            'altura' => 6.5,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '23573204000117',
            'nome' => 'Celular Xiaomi Redmi Note 12',
            'descricao' => '128GB / 6GB RAM/Dual Sim/TelaP e 13MP - Onyx Gray - Preto',
            'peso' => 184,
            'un_medida_massa_id' => 4,
            'comprimento' => 17.9,
            'largura' => 9,
            'altura' => 5.9,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '23573204000117',
            'nome' => 'Chapa Cerâmica Preta - Taiff',
            'descricao' => 'Bivolt, 180ºC com revestimento de cerâmica e cabo com tamanho de 1,8m',
            'peso' => 294,
            'un_medida_massa_id' => 4,
            'comprimento' => 31,
            'largura' => 29,
            'altura' => 29,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '18872044000177',
            'nome' => 'SSD Western Digital WD Green',
            'descricao' => 'PC SN350 NVMe SSD 240GB, PRETO, WDS240G2G0C, 240 GB',
            'peso' => 142,
            'un_medida_massa_id' => 4,
            'comprimento' => 8,
            'largura' => 2.21,
            'altura' => 0.23,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '18872044000177',
            'nome' => 'Edredom Solteiro Paris Soft',
            'descricao' => 'Dupla face Preto',
            'peso' => 1.6,
            'un_medida_massa_id' => 1,
            'comprimento' => 30,
            'largura' => 30,
            'altura' => 30,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '57210995000132',
            'nome' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
            'descricao' => 'English Edition - 1214 pages',
            'peso' => 120,
            'un_medida_massa_id' => 4,
            'comprimento' => 2.03,
            'largura' => 17.53,
            'altura' => 22.86,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '57210995000132',
            'nome' => 'Pasta Térmica Thermal Silver',
            'descricao' => 'Seringa 5G Prata Implastec',
            'peso' => 20,
            'un_medida_massa_id' => 4,
            'comprimento' => 3,
            'largura' => 3,
            'altura' => 18,
            'un_medida_comprimento_id' => 6
        ]);

        Produto::create([
            'fornecedor_cnpj' => '05895455000136',
            'nome' => 'Whisky Johnnie Walker Black Label',
            'descricao' => '2 anos, 750ml, a embalagem pode variar',
            'peso' => 750,
            'un_medida_massa_id' => 14,
            'comprimento' => 24.8,
            'largura' => 8.4,
            'altura' => 24.8,
            'un_medida_comprimento_id' => 6
        ]);
    }
}
