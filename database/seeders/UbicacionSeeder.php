<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ubicacion;
use App\Models\Asociado;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Listas predefinidas
        $tipoFincaOptions = ['propia', 'familiar', 'contrato de aparcería'];
        $veredasOptions = ['Aguablanca', 'Alsacia', 'Casiano', 'Guayanas', 'Helechales', 'Riofrío', 'Ruitoque', 'Vericute'];

        // Datos predefinidos para latitudes, longitudes y nombres de fincas
        $ubicaciones = [
            ['latitude' => 7.08731637358125, 'longitude' => -73.06110285952298, 'nombre_finca' => 'Finca1'],
            ['latitude' => 7.091828616217731, 'longitude' => -73.06301548948824, 'nombre_finca' => 'Finca2'],
            ['latitude' => 7.088319097986324, 'longitude' => -73.05973153992524, 'nombre_finca' => 'Finca3'],
            ['latitude' => 7.087352185204721, 'longitude' => -73.05453496039699, 'nombre_finca' => 'Finca4'],
            ['latitude' => 7.088426532614595, 'longitude' => -73.05431843624999, 'nombre_finca' => 'Finca5'],
            ['latitude' => 7.0713799251730665, 'longitude' => -73.05540105698503, 'nombre_finca' => 'Finca6'],
            ['latitude' => 7.077432259170899, 'longitude' => -73.04623486809493, 'nombre_finca' => 'Finca7'],
            ['latitude' => 7.090539408553595, 'longitude' => -73.07149601870631, 'nombre_finca' => 'Finca8'],
            ['latitude' => 7.0897873690786275, 'longitude' => -73.07719782124424, 'nombre_finca' => 'Finca9'],
            ['latitude' => 7.084471590364916, 'longitude' => -73.06913853113498, 'nombre_finca' => 'Finca10'],
        ];

        // Obtener todos los asociados
        $asociados = Asociado::all();

        foreach ($asociados as $index => $asociado) {
            // Usar índices de la lista predefinida
            $ubicacionData = $ubicaciones[$index % count($ubicaciones)];
            $vereda = $veredasOptions[$index % count($veredasOptions)];
            $tipoFinca = $tipoFincaOptions[$index % count($tipoFincaOptions)];

            Ubicacion::create([
                'vereda' => $vereda,
                'nombre_finca' => $ubicacionData['nombre_finca'],
                'latitude' => $ubicacionData['latitude'],
                'longitude' => $ubicacionData['longitude'],
                'hectareas' => random_int(1, 100), // Puedes ajustar esto según tus necesidades
                'tipo_finca' => $tipoFinca,
                'asociado_id' => $asociado->id,
            ]);
        }
    }
}
