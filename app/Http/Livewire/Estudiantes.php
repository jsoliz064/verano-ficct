<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;
use App\Models\Carrera;
use App\Models\Materia;

class Estudiantes extends Component
{
    public $estudiantes,$nombre,$registro,$carrera_id,$carreras,$materia;

    /* public function mount($materia_id){
        $this->materia = $materia_id;
    } */
    public function render()
    {
        $this->estudiantes=Materia::find($this->materia)->estudiantes;
        $this->carreras=Carrera::all();
        return view('livewire.estudiantes');
    }
    public function habilitar($estudiante_id){
        $estudiante=Estudiante::find($estudiante_id);
        if ($estudiante->estado==false){

            $materias=$estudiante->materias;
            foreach($materias as $materia){
                $materia->update([
                    'inscritos' =>$materia->inscritos+1,
                ]);
            }
            

            $estudiante->update([
                'estado' =>true,
            ]);
        }else{
            $materias=$estudiante->materias;
            foreach($materias as $materia){
                $materia->update([
                    'inscritos' =>$materia->inscritos-1,
                ]);
            }

            $estudiante->update([
                'estado' =>false,
            ]);
            
        }
    }
    public function eliminar($estudiante_id){
        $estudiante=Estudiante::find($estudiante_id);
        $materias=$estudiante->materias;
            foreach($materias as $materia){
                $materia->update([
                    'inscritos' =>$materia->inscritos-1,
                ]);
            }

        Estudiante::find($estudiante_id)->delete();
    }

    
}
