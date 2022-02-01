<div class="card my-5">
    <div class="card my-5">
        
        <form action="">
            <div align="center">
                <h1 class="card-title">MATERIAS</h1>
                <div class="row my-4">
                    <div class="col" align="center">
                        <input wire:model="buscar" type="text" placeholder="Buscar Materia">
                    </div>
                </div>
            </div>
        </form>
    </div>
    
    <div class="card-body table-responsive">
        {{--  @auth()  --}}
            <button wire:click="crear()" class="btn btn-primary">Registrar Materia</button>
        {{--  @endauth  --}}
        @if ($modal)
            @include('livewire.crearmateria')
        @endif
        <table class="table table-striped table-bordered shadow-lg mt-4">
            <thead>
                <tr style="background-color:#050505;color:#ffff">
                    <th>Id</th>
                    <th>Sigla</th>
                    <th>Nombre</th>
                    <th>Inscritos</th>
                    <th width="20%">Accion </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materias as $materia)
                <tr>
                    <td>{{ $materia->id }}</td>
                    <td>{{ $materia->sigla }}</td>
                    <td>{{ $materia->nombre }}</td>
                    <td>{{ $materia->inscritos }}</td>
                    <td>
                        <form>
                            <a class="btn btn-dark btn-sm" href="" style="background-color:#050505;color:#ffff">
                                    <i class="fas fa-edit"></i> Ver Estudiantes
                            </a>
                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar">
                                <i class="fas fa-trash-alt">
                                </i> Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
