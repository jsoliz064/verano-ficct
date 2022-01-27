<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriaEstudiante extends Model
{
    use HasFactory;
    protected $table="materia_estudiantes";
    protected $guarded=['id','created_at','updated_at'];
}
