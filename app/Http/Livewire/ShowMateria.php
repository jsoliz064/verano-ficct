<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Materia;
use App\Models\Carrera;
use Livewire\WithPagination;

class ShowMateria extends Component
{
    use WithPagination;

    public $materias, $sigla, $nombre, $carrera_id, $docente, $semestre;
    public $search = "";
    public $cant = 5;
    public $open = false;

    protected $listeners = ['render', 'search' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function limpiarCampos()
    {
        $this->sigla = "";
        $this->nombre = "";
        $this->semestre = "";
        $this->docente = "";
    }
    public function eliminar($materia_id)
    {
        Materia::find($materia_id)->delete();
    }

    public function render()
    {
        $materiasa = Materia::where('nombre', 'like', '%' . $this->search . '%')
            ->orWhere('sigla', 'like', '%' . $this->search . '%')
            ->paginate($this->cant);
        return view('livewire.show-materia', compact('materiasa'));
    }
}
