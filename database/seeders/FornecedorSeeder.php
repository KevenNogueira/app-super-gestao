<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Instancia do objeto
        /*         $fornecedor = new Fornecedor();

        $fornecedor->nome = 'Arte Pães LTDA';
        $fornecedor->site = 'https://www.artepaes.com.br';
        $fornecedor->uf = 'MG';
        $fornecedor->email = 'padariaartepaes@artepaes.com.br';
        $fornecedor->save();

        // Usando o método estatico CREATE / Para utilização o attr fillable da classe tem que está configurado de acordo!
        $fornecedor::create([
            'nome' => 'Arte Fácil LTDA',
            'site' => 'https://www.artefacil.com.br',
            'uf' => 'MG',
            'email' => 'comercialartefacil@artefacil.com.br',
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Mundiale Comunicações LTDA',
            'site' => 'https://www.mundiale.com.br',
            'uf' => 'MG',
            'email' => 'mundialetelecomunicacoes@mundiale.com.br',
        ]); */

        Fornecedor::factory()->count(95)->create();
    }
}
