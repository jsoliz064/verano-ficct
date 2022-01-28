<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;
use App\Models\Carrera;

class Estudiantes extends Component
{
    public $estudiantes,$nombre,$registro,$carrera_id,$carreras;
    public function render()
    {
        $this->estudiantes=Estudiante::all();
        $this->carreras=Carrera::all();
        return view('livewire.estudiantes');
    }

    public function crear(){

    }
}
