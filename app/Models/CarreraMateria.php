<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraMateria extends Model
{
    use HasFactory;
    protected $table="carrera_materia";
    protected $guarded=['id','created_at','updated_at'];

    /* //relacion uno a muchos inversa
    public function Carrera(){
        return $this->belongsTo('App\Models\Carrera');
    }

    //relacion uno a muchos inversa
    public function Materia(){
        return $this->belongsTo('App\Models\Materia');
    } */
}
