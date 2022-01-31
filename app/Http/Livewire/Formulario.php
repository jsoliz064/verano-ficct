<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;
use App\Models\Carrera;
use App\Models\Materia;

class Formulario extends Component
{
    public $nombre,$registro,$carrera_id,$carreras,$telefono,$buscar;

    public function render()
    {
        $this->carreras=Carrera::all();
        $materias=Materia::where('nombre','LIKE','%'.$this->buscar.'%')->get();
        return view('livewire.formulario',compact('materias'));
    }
    public function guardar(){
        if ($this->carrera_id!=null)
        {
            Estudiante::create([
                'registro'=>$this->registro,
                'nombre'=>$this->nombre,
                'carrera_id'=>$this->carrera_id,
                'telefono' =>$this->telefono,
                'estado'=>false,
            ]);
        }
        $this->limpiar();
        session()->flash('message','Inscripción Exitosa');
    }
    public function limpiar() {
        $this->nombre="";
        $this->registro="";
        $this->carrera_id="";
        $this->telefono="";
    }
    
}
