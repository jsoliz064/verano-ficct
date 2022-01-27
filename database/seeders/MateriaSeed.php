<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Materia;
use App\Models\CarreraMateria;

class MateriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materia::create([
            'sigla'=> 'INF110',
            'nombre'=> 'Introduccion a la Informatica',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'INF119',
            'nombre'=> 'Estructuras Discretas',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'FIS100',
            'nombre'=> 'Fisica 1',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);

        Materia::create([
            'sigla'=> 'MAT110',
            'nombre'=> 'Calculo 1',
            'inscritos'=> 0,
        ])->carreras()->attach([1,2,3]);
    }
}
