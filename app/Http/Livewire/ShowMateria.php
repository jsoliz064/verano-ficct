<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Materia;
use App\Models\Carrera;
use Livewire\WithPagination;

class ShowMateria extends Component
{
    use WithPagination;

    public $materias, $sigla, $nombre, $carrera_id, $carreras;
    public $search = "";
    public $cant = 5;
    public $modal = false;

    protected $listeners = ['render', 'search' => '$refresh'];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal();
    }
    public function abrirModal()
    {
        $this->modal = true;
    }
    public function cerrarModal()
    {
        $this->modal = false;
    }
    public function limpiarCampos()
    {
        $this->sigla = "";
        $this->nombre = "";
        $this->carrera_id = "";
    }
    public function eliminar($materia_id)
    {
        Materia::find($materia_id)->delete();
    }

    public function render()
    {
        $materiasa = Materia::where('sigla', 'like', '%' . request('search') . '%')
            ->orWhere('nombre', 'like', '%' . request('search') . '%')
            ->paginate($this->cant);
        return view('livewire.show-materia', compact('materiasa'));
    }
}
