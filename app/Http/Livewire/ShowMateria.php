<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Materia;
use App\Models\Carrera;
use App\Models\CarreraMateria;
use Livewire\WithPagination;

class ShowMateria extends Component
{
    use WithPagination;

    public $materia_id,$sigla, $nombre, $docente,$grupo;
    public $search = "";
    public $cant = 5;
    public $open = false;
    public $open2=false;
    public $carrera1,$carrera2,$carrera3,$c1,$c2,$c3,$cr1,$cr2,$cr3;

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
        $this->c1="";
        $this->c2="";
        $this->c3="";
        $this->materia_id = "";
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
        $this->carrera1=Carrera::find(1);  
        $this->carrera2=Carrera::find(2); 
        $this->carrera3=Carrera::find(3);  
        return view('livewire.show-materia', compact('materiasa'));
    }
    public function guardar()
    {
        $materia = Materia::create([
            'sigla' => $this->sigla,
            'nombre' => $this->nombre,
            'docente' => $this->docente,
            'inscritos'=>0,
            'grupo' => $this->grupo,
        ]);

        if ($this->c1 != null) 
        $array[]=$this->c1;
        if ($this->c2 != null) 
            $array[]=$this->c2;
        if ($this->c3 != null) 
            $array[]=$this->c3;
        $materia->carreras()->attach($array);
        $this->limpiarCampos();
    }
    public function edit($id)
    {
        $this->open2=true;
        $this->materia_id=$id;
        $materia= Materia::find($id);
        $this->sigla=$materia->sigla;
        $this->nombre=$materia->nombre;
        $this->docente=$materia->docente;
        $this->grupo=$materia->grupo;
        $carreras=$materia->carreras;
        foreach ($carreras as $carrera){
            if ($carrera->id == 1)
            $this->c1=1;
            if ($carrera->id == 2)
            $this->c2=2;
            if ($carrera->id == 3)
            $this->c3=3;
        }
        $this->cr1=$this->c1;
        $this->cr2=$this->c2;
        $this->cr3=$this->c3;

    }
    public function cancelar(){
        $this->open2=false;
        $this->open=false;
        $this->limpiarCampos();
    }

    public function update()
    {
        $materia= Materia::find($this->materia_id);
        $materia ->update([
            'sigla' => $this->sigla,
            'nombre' => $this->nombre,
            'docente' => $this->docente,
            'grupo' => $this->grupo,
        ]);
        if ($this->cr1!=$this->c1 || $this->cr2!=$this->c2 || $this->cr3!=$this->c3){
            $carreramaterias=CarreraMateria::where('materia_id',$materia->id)->get();
            foreach ($carreramaterias as $carreramateria){
                $carreramateria->delete();
            }
            if ($this->c1 != null){
                $array[]=$this->c1;
            } 
            if ($this->c2 != null){
                $array[]=$this->c2;
            }
            if ($this->c3 != null){
                $array[]=$this->c3;
            } 
            $materia->carreras()->attach($array);
        }
        $this->limpiarCampos();
        $this->open2=false;
    }
}
