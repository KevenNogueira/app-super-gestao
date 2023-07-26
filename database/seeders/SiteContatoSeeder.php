<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /*         $contato = new SiteContato();
        $contato->nome = 'Keven Nogueira';
        $contato->telefone = '(31) 9 8233-3847';
        $contato->email = 'kevennogueira161@gmail.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'Olá, gostaria de mais informações sobre o Super Gestão!';
        $contato->save(); */

        SiteContato::factory()->count(100)->create();
    }
}
