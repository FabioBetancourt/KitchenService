<?php

namespace App\Jobs;

use App\Models\Order;
use App\Models\Recipe;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class OrderCreated implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Execute the job.
     */
    public function handle()
    {
        // Seleccionar una receta aleatoria
        $recipe = Recipe::inRandomOrder()->first();

        if (!$recipe) {
            return  'No recipes available';
        }

        foreach ($recipe->ingredients as $ingredient) {
            $response = Http::post('https://orca-app-ubmtb.ondigitalocean.app/api/update-quantity', [
                'name' => $ingredient->name,
                'count' => $ingredient->pivot->quantity
            ]);

            $ingredientResponse = $response->json();

            if ($response->failed() || $ingredientResponse['message'] !== 'Ingredient quantity updated successfully') {
                return 'Ingredient quantity update failed';
            }
        }
        // Si todos los ingredientes están disponibles, guardar el pedido
        Order::create(['recipe_id' => $recipe->id]);
    }
}
