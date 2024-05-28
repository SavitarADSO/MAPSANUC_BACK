<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produccion;
use App\Models\Asociado;

class ProduccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categorías y productos predefinidos
        $categorias = [
            'Frutas' => [
                ['producto' => 'limón', 'descripcion' => 'Limon tahiti'],
                ['producto' => 'mango', 'descripcion' => 'Mango tommy'],
                ['producto' => 'piña', 'descripcion' => 'Piña golden']
            ],
            'Verduras' => [
                ['producto' => 'lechuga', 'descripcion' => 'Lechuga romana'],
                ['producto' => 'tomate', 'descripcion' => 'Tomate chonto'],
                ['producto' => 'zanahoria', 'descripcion' => 'Zanahoria criolla']
            ],
            'Carnes' => [
                ['producto' => 'res', 'descripcion' => 'Carne de res'],
                ['producto' => 'cerdo', 'descripcion' => 'Carne de cerdo'],
                ['producto' => 'pollo', 'descripcion' => 'Carne de pollo']
            ],
            'Lacteos' => [
                ['producto' => 'leche', 'descripcion' => 'Leche entera'],
                ['producto' => 'queso', 'descripcion' => 'Queso costeño'],
                ['producto' => 'yogurt', 'descripcion' => 'Yogurt natural']
            ],
            'Huevos' => [
                ['producto' => 'huevo de gallina', 'descripcion' => 'Huevo AA'],
                ['producto' => 'huevo de codorniz', 'descripcion' => 'Huevo de codorniz'],
                ['producto' => 'huevo de pato', 'descripcion' => 'Huevo de pato']
            ],
        ];

        // Obtener todos los asociados
        $asociados = Asociado::all();

        foreach ($asociados as $asociado) {
            // Seleccionar una categoría aleatoria
            $categoria = array_rand($categorias);

            foreach ($categorias[$categoria] as $producto) {
                Produccion::create([
                    'categorías' => $categoria,
                    'productos' => $producto['producto'],
                    'descripcion' => $producto['descripcion'],
                    'asociado_id' => $asociado->id,
                ]);
            }
        }
    }
}
