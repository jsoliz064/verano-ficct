<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Materia;
use App\Models\Carrera;

class Materias extends Component
{
    public $materias,$sigla,$nombre,$carrera_id,$carreras,$buscar;
    public $modal=false;
    public function render()
    {
        //$this->materias=Materia::all();
        $this->materias=Materia::where('nombre','LIKE','%'.$this->buscar.'%')->get();

        $this->carreras=Carrera::all();
        return view('livewire.materias');
    }
    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function abrirModal(){
        $this->modal=true;
    }
    public function cerrarModal(){
        $this->modal=false;
    }
    public function limpiarCampos(){
        $this->sigla="";
        $this->nombre="";
        $this->carrera_id="";
    }
    public function eliminar($materia_id){
        Materia::find($materia_id)->delete();
    }
}
