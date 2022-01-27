<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraMateria extends Model
{
    use HasFactory;
    protected $table="carrera_materias";
    protected $guarded=['id','created_at','updated_at'];
}
