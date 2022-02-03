<div class="my-5">
    <x-table>

        <div class="card my-5 pt-8">
            <form action="">
                <div align="center" class="py-8 font-bold text-xl underline">
                    <h1> LISTA DE MATERIAS</h1>
                </div>
            </form>
        </div>

        <div class="px-4 py-2 flex items-center">
            {{-- @endauth --}}
            <div class="flex items-center">
                <span class="mr-2 font-bold ">Paginar</span>
                <select wire:model='cant'
                    class="mr-2 px-8 py-2 border-gray-300 text-left text-md rounded-2xl font-medium text-black-600 uppercase tracking-wider ">
                    <option value="5">5</option>
                    <option value="2">2</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                </select>
                <span class="ml-4 mr-2 font-bold">Buscar</span>
            </div>
            <x-jet-input type="text" class="flex-1 mr-3 rounded-full w-full py-2 px-4 text-md"
                placeholder="Escriba el nombre de la materia" wire:model="search" />
            <x-jet-danger-button
                class="font-bold text-white text-md bg-red-500 rounded cursor-pointer hover:bg-red-600 py-2 px-4 "
                wire:click="$set('open', true)"> Registrar
            </x-jet-danger-button>
        </div>
        <div class=" card card-body">
            {{-- @auth() --}}

            @if (count($materiasa))
                <table class=" table table-striped min-w-full divide-y divide-gray-200 text-md shadow-lg mt-4 border-5">
                    <thead class="rounded-3xl px-8 text-white" style="background-color: #D15238">
                        <tr>
                            <th scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Id
                            </th>
                            <th scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Materia</th>
                            <th scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Docente</th>
                            <th scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Inscritos</th>
                            <th width="20%" scope="col"
                                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                                Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($materiasa as $materia)
                            <tr class="mx-4 my-4 divide-y divide-gray-200 bg-white">
                                <td class="px-4 py-2">
                                    <span
                                        class="px-2 py-1 inline-flex text-xl leading-10 font-semibold rounded-full
                                bg-red-100 text-red-800">{{ $materia->id }}
                                    </span>
                                </td>
                                <td class="px-8 py-4">
                                    <div class="text-md font-bold text-gray-900">
                                        {{ $materia->sigla }}
                                    </div>
                                    <div class="text-md text-gray-500">
                                        {{ $materia->nombre }}
                                    </div>
                                </td>
                                <td>
                                    <div class="my-4 px-8">Vacío</div>
                                </td>
                                <td class="px-8 py-6 text-md text-gray-500 font-bold">
                                    @if ($materia->inscritos == null)
                                        <span class="px-2 my-4 rounded-full inline-flex text-white bg-gray-500">
                                            Sin inscritos
                                        </span>
                                    @else
                                        {{ $materia->inscritos }}
                                    @endif
                                </td>
                                <td class="my-3 inline-flex justify-center px-6 py-4 whitespace-nowrap flex">
                                    <div class="whitespace-nowrap flex">
                                        <a class="ml-2 font-bold text-white rounded cursor-pointer bg-indigo-600 hover:bg-indigo-500 py-2 px-4"
                                            href="{{ route('materia.estudiantes.show', $materia->id) }}">
                                            <i class="fas fa-users"></i>
                                        </a>
                                    </div>
                                    <div class="whitespace-nowrap flex">
                                        <a
                                            class="ml-2 font-bold text-white rounded cursor-pointer bg-gray-600 hover:bg-gray-700 py-2 px-4">
                                            <i class=" fas fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="whitespace-nowrap flex">
                                        <a
                                            class="ml-2 font-bold text-white rounded cursor-pointer bg-green-500 hover:bg-green-600 py-2 px-4">
                                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="whitespace-nowrap flex">
                                        <a class="ml-2 font-bold text-white rounded cursor-pointer bg-red-600 hover:bg-red-500 py-2 px-4"
                                            onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar">
                                            <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                        </a>
                                    </div>

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
                    No hay materias con ese nombre
                </div>
            @endif

        </div>
    </x-table>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Crear materia:
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Nombre de la Materia" />
                <x-jet-input type="text" class="w-full" wire:model.defer="nombre"
                    placeholder='Escriba el nombre' />

            </div>

            <div class="mb-4">
                <x-jet-label value="Sigla de la Materia" />
                <x-jet-input wire:model.defer='sigla' type="text" class=" w-full"
                    placeholder='Escriba la sigla' />
            </div>


            <div class="mb-4">
                <x-jet-label value="Nombre del Docente" />
                <x-jet-input type="text" class="w-full" wire:model.defer="docente"
                    placeholder='Escriba el nombre del docente' />
            </div>

            <div class="mb-4">
                <x-jet-label value="Semestre de la Materia" />
                <x-jet-input type="number" type="number" min="1" max="9" class="w-full"
                    wire:model.defer="semestre" placeholder='Escriba el semestre de la materia' />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="" wire:loading.attr="disabled" class="disabled:opacity-25">
                Crear Materia
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>




</div>
