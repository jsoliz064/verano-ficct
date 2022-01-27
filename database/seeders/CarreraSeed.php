<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carrera;

class CarreraSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carrera::create([
            'nombre'=> 'Ingenieria en Sistemas',
        ]);
        Carrera::create([
            'nombre'=> 'Ingenieria en Informatica',
        ]);
        Carrera::create([
            'nombre'=> 'Ingenieria en Redes y Telecomunicaciones',
        ]);
    }
}
