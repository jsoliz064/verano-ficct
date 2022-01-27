<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table="materias";
    protected $fillable=['nombre'];

    //Relacion uno a muchos
    public function estudiantes(){
        return $this->hasMany('App\Models\Estudiante');
    }

    //Relacion muchos a muchos
    public function carreras(){
        return $this->belongsToMany('App\Models\Carrera');
    }
}
