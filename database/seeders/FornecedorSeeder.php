<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;


class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fornecedor::create([
            'nome' => 'Leal Comercial Ltda.',
            'cnpj' => '05895455000136',
            'uf' => 'SE',
            'email' => 'clarice.assuncao@dominato.br',
            'site' => 'http://www.serrano.com/'
        ]);

        Fornecedor::create([
            'nome' => 'Jimenes e Ramires Ltda.',
            'cnpj' => '06105814000177',
            'uf' => 'SP',
            'email' => 'wferraz@souza.com.br',
            'site' => 'http://www.pedrosa.com/voluptates-voluptatem-eum-blanditiis-suscipit-rerum'
        ]);

        Fornecedor::create([
            'nome' => 'Roque S.A.',
            'cnpj' => '18872044000177',
            'uf' => 'RJ',
            'email' => 'agustina.souza@jimenes.com',
            'site' => 'http://queiros.net/ipsa-ratione-vitae-reiciendis-ipsam-vel-sit-rerum-quo.html'
        ]);

        Fornecedor::create([
            'nome' => 'Fernandes-Marés',
            'cnpj' => '23573204000117',
            'uf' => 'MA',
            'email' => 'jlozano@bezerra.com.br',
            'site' => 'http://www.salazar.com/iure-dolorum-doloremque-saepe-beatae-voluptatem-ut-cupiditate.html'
        ]);

        Fornecedor::create([
            'nome' => 'Marinho Comercial Ltda.',
            'cnpj' => '31555328000106',
            'uf' => 'SE',
            'email' => 'micaela28@batista.net.br',
            'site' => 'http://www.davila.net/'
        ]);

        Fornecedor::create([
            'nome' => 'Lira Comercial Ltda.',
            'cnpj' => '32229732000144',
            'uf' => 'MT',
            'email' => 'aguiar.estela@leon.br',
            'site' => 'http://vega.net.br/aut-ea-qui-soluta-eligendi-soluta-minus-et.html'
        ]);

        Fornecedor::create([
            'nome' => 'Faro Comercial Ltda.',
            'cnpj' => '35011095000123',
            'uf' => 'AM',
            'email' => 'jazevedo@cordeiro.net.br',
            'site' => 'http://www.meireles.br/'
        ]);

        Fornecedor::create([
            'nome' => 'Lovato Comercial Ltda.',
            'cnpj' => '57210995000132',
            'uf' => 'AC',
            'email' => 'mauro.pena@marinho.com',
            'site' => 'http://www.batista.com.br/tempora-dolorem-dolorem-rem-eveniet-eos'
        ]);

        Fornecedor::create([
            'nome' => 'Flores-Cervantes',
            'cnpj' => '57427579000190',
            'uf' => 'MG',
            'email' => 'yohanna.zambrano@salazar.com',
            'site' => 'http://fonseca.com.br/'
        ]);

        Fornecedor::create([
            'nome' => 'Reis e Oliveira S.A.',
            'cnpj' => '78055328000100',
            'uf' => 'MG',
            'email' => 'renato53@assuncao.com.br',
            'site' => 'http://www.verdara.br/'
        ]);
    }
}
