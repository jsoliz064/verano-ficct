<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $table="carreras";
    protected $fillable=['nombre'];

    //Relacion uno a muchos
    public function estudiantes(){
        return $this->hasMany('App\Models\Estudiantes');
    }

    //Relacion muchos a muchos
    public function materias(){
        return $this->belongsToMany('App\Models\Materia');
    }
}
