<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Estudiante;

class EstudianteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estudiante::create([
            'registro'=> '218075881',
            'nombre'=> 'Jose Daniel Soliz Supayabe',
            'carrera_id'=> 1,
            'estado'=> true,
        ]);
    }
}
