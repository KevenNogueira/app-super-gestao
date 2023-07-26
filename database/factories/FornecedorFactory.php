<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fornecedor>
 */
class FornecedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'nome' => fake()->unique()->company(),
            'cnpj' => fake()->unique()->cnpj(false),
            'site' => fake()->unique()->url(),
            'uf' => fake()->regionAbbr(),
            'email' => fake()->unique()->companyEmail(),
        ];
    }
}
