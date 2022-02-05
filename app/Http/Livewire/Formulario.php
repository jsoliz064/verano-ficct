<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Estudiante;
use App\Models\Carrera;
use App\Models\Materia;


class Formulario extends Component
{
    public $nombre, $registro, $carrera_id, $carreras, $telefono, $buscar, $materia1, $materia2, $materias;

    public function render()
    {
        $this->carreras = Carrera::all();
        //para buscar materia 
        //$materias=Materia::where('nombre','LIKE','%'.$this->buscar.'%')->get();
        if ($this->carrera_id != null) {
            $this->materias = Carrera::find($this->carrera_id)->materias;
        } else {
            $this->materias = Materia::all();
        }
        return view('livewire.formulario');
    }
    public function guardar()
    {
        if ($this->nombre != null && $this->registro != null && $this->carrera_id != null && $this->materia1 != null) {
            $estudiante = Estudiante::create([
                'registro' => $this->registro,
                'nombre' => $this->nombre,
                'carrera_id' => $this->carrera_id,
                'telefono' => $this->telefono,
                'estado' => false,
            ]);
            if ($this->materia2 != null) {
                $estudiante->materias()->attach([$this->materia1, $this->materia2]);
            } else {
                $estudiante->materias()->attach($this->materia1);
            }
            $this->emit('alert', '¡Has registrado exitosamente tus datos!');
        } else {
            $this->emit('alert2', '¡Introduce tus datos correctamente!');
        }
        $this->limpiar();
    }
    public function limpiar()
    {
        $this->nombre = "";
        $this->registro = "";
        $this->carrera_id = "";
        $this->telefono = "";
        $this->materia1 = "";
        $this->materia2 = "";
    }
}
