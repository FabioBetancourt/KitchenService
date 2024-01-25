<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{

    public function show()
    {
        // Obtener todas las recetas con sus ingredientes
        $recipes = Recipe::with('ingredients')->get();
        // Preparar los datos para la respuesta
        $recipesData = $recipes->map(function ($recipe) {
            return [
                'name' => $recipe->name,
                'ingredients' => $recipe->ingredients->map(function ($ingredient) {
                    return [
                        'name' => $ingredient->name,
                        'quantity' => $ingredient->pivot->quantity
                    ];
                }),
            ];
        });
        return response()->json(['recipes' => $recipesData]);
    }
}
