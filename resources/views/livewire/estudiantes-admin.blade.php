<div style="overflow: hidden" class="my-5">
    <x-table>
        <div class="card my-5 pt-8">
            <div align="center" class="py-8 font-bold text-xl underline">
                <h1> LISTA DE ESTUDIANTES</h1>
            </div>
        </div>
        <div class="card-header">
            <button style="background-color:#050505;color:#ffff" class="btn btn-outline-dark" type="button"
                onclick="history.back()"><i class='fas fa-angle-left'></i> Volver</button>
        </div>
        <div class="card card-body">
            <table class="table table-striped min-w-full divide-y divide-gray-200 text-md shadow-lg mt-4 border-5">
                <thead class="rounded-3xl px-8 text-white" style="background-color: #D15238">
                    <tr>
                        <th scope="col"
                            class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                            Id
                        </th>
                        <th scope="col"
                            class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                            Registro1</th>
                        <th scope="col"
                            class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                            Nombre</th>
                        <th scope="col"
                            class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                            Carrera</th>
                        <th scope="col"
                            class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                            Telefono</th>
                        <th scope="col"
                            class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                            Estado</th>
                        <th width="20%" scope="col"
                            class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                            Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                        <tr class="mx-4 my-4 divide-y divide-gray-200 bg-white">
                            <td class="px-4 py-2">
                                <span
                                    class="px-2 py-1 inline-flex text-xl leading-10 font-semibold rounded-full
                  bg-red-100 text-red-800">{{ $estudiante->id }}
                                </span>
                            </td>
                            <td class="px-8 py-4">
                                <div class="text-md font-bold text-gray-900">
                                    {{ $estudiante->registro }}
                                </div>
                            </td>
                            <td class="px-8 py-4">
                                <div class="text-md text-gray-500">
                                    {{ $estudiante->nombre }}
                                </div>
                            </td>

                            <td class="px-8 py-4">
                                <div class="text-md text-gray-500">
                                    {{ $estudiante->carrera->nombre }}
                                </div>
                            </td>

                            <td class="px-8 py-4">
                                <div class="text-md text-gray-500">
                                    {{ $estudiante->telefono }}
                                </div>
                            </td>

                            <td class="px-8 py-4">
                                <div class="text-md text-gray-500">
                                    @if ($estudiante->estado)
                                        <span class="label label-success">
                                            Habilitado
                                        </span>
                                    @else
                                        <span class="label label-danger">
                                            No habilitado
                                        </span>
                                    @endif
                                </div>
                            </td>

                            <td class="my-3 inline-flex justify-center px-6 py-4 whitespace-nowrap flex">
                                <form>
                                    <a wire:click.prevent="habilitar({{ $estudiante->id }})"
                                        class="ml-2 font-bold text-white rounded cursor-pointer bg-gray-600 hover:bg-gray-700 py-2 px-4"
                                        href="" style="background-color:#050505;color:#ffff">
                                        @if (!$estudiante->estado)
                                            <i class="fas fa-edit"></i> Habilitar
                                        @else
                                            <i class="fas fa-edit"></i> Deshabilitar
                                        @endif
                                    </a>
                                    <button wire:click.prevent="eliminar({{ $estudiante->id }})"
                                        class="ml-2 font-bold text-white rounded cursor-pointer bg-red-600 hover:bg-red-500 py-2 px-4"
                                        onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar">
                                        <i class="fas fa-trash-alt">
                                        </i> Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
        </div>
    </x-table>



</div>
