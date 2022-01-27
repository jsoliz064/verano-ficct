<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table="estudiantes";
    protected $guarded=['id','created_at','updated_at'];

    //relacion uno a muchos inversa
    public function Carrera(){
        return $this->belongsTo('App\Models\Carrera');
    }

    //Relacion muchos a muchos
    public function materias(){
        return $this->belongsToMany('App\Models\Materia');
    }
}
