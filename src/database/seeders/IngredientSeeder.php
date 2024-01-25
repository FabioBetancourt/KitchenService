<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // fill the ingredients table with ingredients data.
        $ingredients = [
            [
                'name' => 'tomato'
            ],
            [
                'name' => 'lemon'
            ],
            [
                'name' => 'potato'
            ],
            [
                'name' => 'rice'
            ],
            [
                'name' => 'ketchup'
            ],
            [
                'name' => 'lettuce'
            ],
            [
                'name' => 'onion'
            ],
            [
                'name' => 'cheese'
            ],
            [
                'name' => 'meat'
            ],
            [
                'name' => 'chicken'
            ],
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
