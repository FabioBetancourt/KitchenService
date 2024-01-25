<?php

namespace Database\Seeders;

use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipe1 = Recipe::create(['name' => 'Lemon chicken with rice']);
        $recipe2 = Recipe::create(['name' => 'chicken Caesar Salad']);
        $recipe3 = Recipe::create(['name' => 'Beef cheeseburgers']);
        $recipe4 = Recipe::create(['name' => 'Tomato Basil Soup']);
        $recipe5 = Recipe::create(['name' => 'Stuffed Baked Potatoes']);
        $recipe6 = Recipe::create(['name' => 'Mediterranean chicken Salad']);
    }
}
