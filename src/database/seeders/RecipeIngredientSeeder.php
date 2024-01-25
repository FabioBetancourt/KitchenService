<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $recipe1 = Recipe::where('name', 'Lemon chicken with rice')->first();
        $recipe2 = Recipe::where('name', 'chicken Caesar Salad')->first();
        $recipe3 = Recipe::where('name', 'Beef cheeseburgers')->first();
        $recipe4 = Recipe::where('name', 'Tomato Basil Soup')->first();
        $recipe5 = Recipe::where('name', 'Stuffed Baked Potatoes')->first();
        $recipe6 = Recipe::where('name', 'Mediterranean chicken Salad')->first();

        $chicken = Ingredient::where('name', 'chicken')->first();
        $rice = Ingredient::where('name', 'rice')->first();
        $lemon = Ingredient::where('name', 'lemon')->first();
        $ketchup = Ingredient::where('name', 'ketchup')->first();
        $lettuce = Ingredient::where('name', 'lettuce')->first();
        $onion = Ingredient::where('name', 'onion')->first();
        $cheese = Ingredient::where('name', 'cheese')->first();
        $meat = Ingredient::where('name', 'meat')->first();
        $tomato = Ingredient::where('name', 'tomato')->first();
        $potato = Ingredient::where('name', 'potato')->first();

        DB::table('recipe_ingredients')->insert([
            // Recipe 1 - Lemon chicken with rice
            [
                'recipe_id' => $recipe1->id,
                'ingredient_id' => $chicken->id,
                'quantity' => 2,
            ],
            [
                'recipe_id' => $recipe1->id,
                'ingredient_id' => $rice->id,
                'quantity' => 1,
            ],
            [
                'recipe_id' => $recipe1->id,
                'ingredient_id' => $lemon->id,
                'quantity' => 1,
            ],

            // Recipe 2 - Chicken Caesar Salad
            [
                'recipe_id' => $recipe2->id,
                'ingredient_id' => $chicken->id,
                'quantity' => 2,
            ],
            [
                'recipe_id' => $recipe2->id,
                'ingredient_id' => $lettuce->id,
                'quantity' => 1,
            ],
            [
                'recipe_id' => $recipe2->id,
                'ingredient_id' => $ketchup->id,
                'quantity' => 1,
            ],

            // Recipe 3 - Beef cheeseburgers
            [
                'recipe_id' => $recipe3->id,
                'ingredient_id' => $meat->id,
                'quantity' => 2,
            ],
            [
                'recipe_id' => $recipe3->id,
                'ingredient_id' => $cheese->id,
                'quantity' => 1,
            ],
            [
                'recipe_id' => $recipe3->id,
                'ingredient_id' => $onion->id,
                'quantity' => 1,
            ],

            // Recipe 4 - Tomato Basil Soup
            [
                'recipe_id' => $recipe4->id,
                'ingredient_id' => $tomato->id,
                'quantity' => 2,
            ],
            [
                'recipe_id' => $recipe4->id,
                'ingredient_id' => $onion->id,
                'quantity' => 1,
            ],
            [
                'recipe_id' => $recipe4->id,
                'ingredient_id' => $cheese->id,
                'quantity' => 1,
            ],

            // Recipe 5 - Stuffed Baked Potatoes
            [
                'recipe_id' => $recipe5->id,
                'ingredient_id' => $potato->id,
                'quantity' => 2,
            ],
            [
                'recipe_id' => $recipe5->id,
                'ingredient_id' => $cheese->id,
                'quantity' => 1,
            ],
            [
                'recipe_id' => $recipe5->id,
                'ingredient_id' => $meat->id,
                'quantity' => 1,
            ],

            // Recipe 6 - Mediterranean Chicken Salad
            [
                'recipe_id' => $recipe6->id,
                'ingredient_id' => $chicken->id,
                'quantity' => 2,
            ],
            [
                'recipe_id' => $recipe6->id,
                'ingredient_id' => $lettuce->id,
                'quantity' => 1,
            ],
            [
                'recipe_id' => $recipe6->id,
                'ingredient_id' => $tomato->id,
                'quantity' => 1,
            ],
        ]);
    }
}
