    <div class="card">
        <div class="card-header">
            <button style="background-color:#050505;color:#ffff" class="btn btn-outline-dark" type="button"
                onclick="history.back()"><i class='fas fa-angle-left'></i> Volver</button>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-striped table-bordered shadow-lg mt-4">
                <thead>
                    <tr style="background-color:#050505;color:#ffff">
                        <th>Id</th>
                        <th>Registro </th>
                        <th>Nombre</th>
                        <th>Carrera</th>
                        <th>Telefono</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>1</td>
                        <td>{{ $estudiante->registro }}</td>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->carrera->nombre }}
                        <td>{{ $estudiante->telefono }}</td>
                        </td>
                        <td>
                            @if ($estudiante->estado)
                                <span class="label label-success">
                                    Habilitado
                                </span>
                            @else
                                <span class="label label-danger">
                                    No habilitado
                                </span>
                            @endif
                        </td>
                        <td>
                            <form>
                                <a wire:click.prevent="habilitar({{$estudiante->id}})" class="btn btn-dark btn-sm" href="" style="background-color:#050505;color:#ffff">
                                    @if (!$estudiante->estado)
                                        <i class="fas fa-edit"></i> Habilitar
                                    @else
                                        <i class="fas fa-edit"></i> Deshabilitar
                                    @endif
                                </a>
                                <button wire:click.prevent="eliminar({{$estudiante->id}})" class="btn btn-danger btn-sm"
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
