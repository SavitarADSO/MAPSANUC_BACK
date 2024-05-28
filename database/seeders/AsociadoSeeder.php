<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Asociado;
use Faker\Factory as Faker;

class AsociadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create('es_ES'); 

        
        for ($i = 0; $i < 10; $i++) {
            Asociado::create([
                'nombre_completo' => $faker->name,
                'genero' => $faker->randomElement(['Masculino', 'Femenino']),
                'documento' => $faker->unique()->randomNumber(7),
                'celular' => $faker->unique()->randomNumber(9),
                'estado_civil' => $faker->randomElement(['Soltero', 'Casado', 'Viudo']),
                'fecha_nacimiento' => $faker->date(),
                'nucleo_familiar' => $faker->sentence(),
            ]);
        }
    }
}
