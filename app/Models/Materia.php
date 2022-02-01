<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table="materias";
    protected $guarded=['id','created_at','updated_at'];

    //Relacion muchos a muchos
    public function estudiantes(){
        return $this->belongsToMany('App\Models\Estudiante');
    }

    //Relacion muchos a muchos
    public function carreras(){
        return $this->belongsToMany('App\Models\Carrera');
    }
}
