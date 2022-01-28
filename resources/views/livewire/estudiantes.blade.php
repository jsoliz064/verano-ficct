<div  class="py-5">
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Registro
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Nombre
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Carrera
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Estado
                    </th>
                    <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($estudiantes as $estudiante)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{$estudiante->registro}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$estudiante->nombre}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{$estudiante->carrera->nombre}}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if ($estudiante->estado)
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Habilitado
                                    </span>
                                @else
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        No habilitado
                                    </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <form  action="" method="post">
                                @csrf
                                @method('delete')
                                    {{-- solo los que tienen permiso a esas rutas.metodo podran ver el button --}}
                                    <a  class="text-indigo-600 hover:text-indigo-900" href="">
                                        @if (!$estudiante->estado)
                                            Habilitar
                                        @else
                                            Deshabilitar
                                        @endif
                                    </a>  
                                    <button class="text-indigo-600 hover:text-indigo-900" onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" 
                                    value="Borrar">Eliminar</button>
                                </form>
                            </td>    
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>
</div>