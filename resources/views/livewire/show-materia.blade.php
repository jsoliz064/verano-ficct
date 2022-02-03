<div class="card my-5">
    <x-table>

        <div class="card my-5">
            <form action="">
                <div align="center" class="p-6">
                    <h1> LISTA DE MATERIAS</h1>
                </div>
            </form>
        </div>

        <div class="px-4 py-6 flex items-center">
            {{-- @endauth --}}

            <div class="flex items-center">
                <span class="mr-2 font-bold ">Paginar</span>
                <select wire:model='cant'
                    class="mr-4 px-12 py-6 border-gray-300 text-left text-2xl rounded-2xl font-medium text-black-600 uppercase tracking-wider ">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                </select>
                <span class="mr-2 font-bold">Buscar</span>
            </div>
            <x-jet-input type="text" class="flex-1 mr-5 rounded-full w-full p-3 text-2xl"
                placeholder="Escriba el nombre de la materia" wire:model="search" />
            <button wire:click="crear()" class="btn btn-primary mr-2">Registrar Materia</button>
        </div>
        <div class="card-body table-responsive">
            {{-- @auth() --}}
 
            @if ($modal)
                @include('livewire.crearmateria')
            @endif
            @if (count($materiasa))
                <table class=" table table-fixed divide-y divide-gray-200 shadow-lg mt-4 table-striped w-full border-5">
                    <thead class="rounded-3xl text-white border-5" style="background-color: #D15238">
                        <tr>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-xl">
                                Id
                            </th>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-xl">
                                Materia</th>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-xl">
                                Docente</th>
                            <th scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-xl">
                                Inscritos</th>
                            <th width="20%" scope="col"
                                class="cursor-pointer px-6 py-3 text-left text-xs font-bold uppercase tracking-wider text-xl">
                                Acciones y Grupos </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materiasa as $materia)
                            <tr class="mx-4 my-4 bg-gray-200">
                                <td class="px-6 py-4">
                                    <span
                                        class="px-4 py-2 inline-flex text-2xl leading-10 font-semibold rounded-full
                                bg-red-100 text-red-800">{{ $materia->id }}
                                    </span>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-xl font-bold text-gray-900">
                                        {{ $materia->sigla }}
                                    </div>
                                    <div class="text-md text-gray-500">
                                        {{ $materia->nombre }}
                                    </div>
                                </td>
                                <td>
                                    <div class="my-4">Vacío</div>
                                </td>
                                <td class="px-8 py-6 text-xl text-gray-500 font-bold">
                                    @if ($materia->inscritos == null)
                                        <span class="px-2 my-4 rounded-full inline-flex text-white bg-gray-500">
                                            Sin inscritos
                                        </span>
                                    @else
                                        {{ $materia->inscritos }}
                                    @endif
                                </td>
                                <td>
                                    <form class="my-4">
                                        <a class="btn btn-dark btn-md" href=""
                                            style="background-color:#050505;color:#ffff">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a class="btn btn-dark btn-md" href=""
                                            style="background-color:#22c55e;color:#ffff">
                                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        </a>
                                        <a class="btn btn-dark btn-md" href=""
                                            style="background-color:#0284c7;color:#ffff">
                                            <i class="fa fa-telegram" aria-hidden="true"></i>
                                        </a>
                                        <button class="btn btn-danger btn-md"
                                            onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar">
                                            <i class="fas fa-trash-alt">
                                            </i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($materiasa->hasPages())
                    <div class="px-6 py-3">
                        {{ $materiasa->links() }}
                    </div>
                @endif

            @else
                <div class="px-6 py-4">
                    No hay materias
                </div>
            @endif

        </div>
    </x-table>
</div>
