<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Otávio Nelson Benez Filho',
            'cpf' => '17113015662',
            'email' => 'silvana.quintana@yahoo.com',
            'telefone' => '(13) 94096-8479',
        ]);

        Cliente::create([
            'nome' => 'Sra. Giovanna Godói Neto',
            'cpf' => '27307591316',
            'email' => 'jlira@yahoo.com',
            'telefone' => '(27) 97102-4266',
        ]);

        Cliente::create([
            'nome' => 'Gean Daniel Benites',
            'cpf' => '40098638890',
            'email' => 'milene51@yahoo.com',
            'telefone' => '(93) 91745-7531',
        ]);

        Cliente::create([
            'nome' => 'Gilberto Paz Sobrinho',
            'cpf' => '40946771600',
            'email' => 'aurora.ramires@r7.com',
            'telefone' => '(74) 96615-8177',
        ]);

        Cliente::create([
            'nome' => 'Dr. Théo Bonilha Neto',
            'cpf' => '44223936425',
            'email' => 'cervantes.willian@jimenes.com.br',
            'telefone' => '(79) 94349-1159',
        ]);

        Cliente::create([
            'nome' => 'Júlia Aguiar Fernandes Sobrinho',
            'cpf' => '51355863341',
            'email' => 'smeireles@gmail.com',
            'telefone' => '(88) 96413-9078',
        ]);

        Cliente::create([
            'nome' => 'Elis de Oliveira Filho',
            'cpf' => '57017935594',
            'email' => 'padilha.patricia@rangel.net',
            'telefone' => '(37) 91578-5019',
        ]);

        Cliente::create([
            'nome' => 'Sr. Sérgio Cristian Pacheco',
            'cpf' => '73764652357',
            'email' => 'lrocha@quintana.com',
            'telefone' => '(11) 99182-9319',
        ]);

        Cliente::create([
            'nome' => 'Lucio Eric Solano Sobrinho',
            'cpf' => '85576899180',
            'email' => 'valentina60@ortega.com.br',
            'telefone' => '(69) 97866-7486',
        ]);

        Cliente::create([
            'nome' => 'Graziela Sophia Sepúlveda Jr.',
            'cpf' => '89355813481',
            'email' => 'gromero@marin.com',
            'telefone' => '(32) 99284-3634',
        ]);
    }
}
