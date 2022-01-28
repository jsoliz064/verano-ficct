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
                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
                                <a class="btn btn-dark btn-sm" href="" style="background-color:#050505;color:#ffff">
                                    @if (!$estudiante->estado)
                                        Habilitar
                                    @else
                                        Deshabilitar
                                    @endif
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
