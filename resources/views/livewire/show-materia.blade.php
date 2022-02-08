<div style="overflow: hidden" class="my-5">
    <x-table>
        <div class="my-5 bg-gray-200">

            <div class=" my-5 pt-8">
                <form action="">
                    <div align="center" class="py-8 font-bold text-xl underline">
                        <h1> OFERTA DE MATERIAS VERENO 3/2021</h1>
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
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span class="ml-4 mr-2 font-bold">Buscar</span>
                </div>
                <x-jet-input type="text" class="flex-1 mr-3 rounded-full w-full py-2 px-4 text-md"
                    placeholder="Escriba el nombre o la sigla de la materia" wire:model="search" />
                @auth()
                    <x-jet-danger-button
                        class="font-bold text-white text-md bg-red-500 rounded cursor-pointer hover:bg-red-600 py-2 px-4 "
                        wire:click="$set('open', true)"> Registrar
                    </x-jet-danger-button>
                @endauth
            </div>


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
                            <tr class="mx-3 my-3 divide-y divide-gray-200 bg-gray-50">
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
                                    @if ($materia->docente != null)
                                        <div class="my-4 px-8">{{ $materia->docente }}</div>
                                    @else
                                        <div class="my-4 px-8">Vacío</div>

                                    @endif
                                </td>
                                <td class="px-8 py-6 text-md text-gray-500 font-bold" style="white-space: nowrap">
                                    @if ($materia->inscritos == null)
                                        <span class="px-2 my-4 rounded-full inline-flex text-white bg-gray-500">
                                            Sin inscritos
                                        </span>
                                    @else
                                        {{ $materia->inscritos }}
                                    @endif
                                </td>
                                <td class=" inline-flex justify-center px-6 py-4 whitespace-nowrap flex">
                                    @can('admin')
                                        <div class="my-3 whitespace-nowrap flex">
                                            <a class="ml-2 font-bold text-white rounded cursor-pointer bg-indigo-600 hover:bg-indigo-500 py-2 px-4"
                                                href="{{ route('materia.estudiantes.show', $materia->id) }}">
                                                <i class="fas fa-users"></i>
                                            </a>
                                        </div>
                                        <div class="my-3 whitespace-nowrap flex">
                                            <a wire:click="edit({{ $materia->id }})"
                                                class="ml-2 font-bold text-white rounded cursor-pointer bg-gray-600 hover:bg-gray-700 py-2 px-4">
                                                <i class=" fas fa-edit"></i>
                                            </a>
                                        </div>
                                    @endcan
                                    <div class=" my-3 whitespace-nowrap flex">
                                        @if ($materia->grupo)
                                            <a href=""
                                                class="ml-2 font-bold text-white rounded cursor-pointer bg-green-500 hover:bg-green-600 py-2 px-4">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        @else
                                            <a wire:click="$emit('alert2','¡No hay grupo!')"
                                                class="ml-2 font-bold text-white rounded cursor-pointer bg-green-500 hover:bg-green-600 py-2 px-4">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        @endif
                                    </div>
                                    @can('admin')
                                        <div class=" my-3 whitespace-nowrap flex">
                                            <a wire:click.prevent="eliminar({{ $materia->id }})"
                                                class="ml-2 font-bold text-white rounded cursor-pointer bg-red-600 hover:bg-red-500 py-2 px-4"
                                                onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar">
                                                <i class="fas fa-trash-alt" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    @endcan

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if ($materiasa->hasPages())
                    <x-table>
                        <div class="px-6 py-3">
                            {{ $materiasa->links() }}
                        </div>
                    </x-table>

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
                <x-jet-label value="Sigla de la Materia:" />
                <x-jet-input wire:model='sigla' type="text" class=" w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre de la Materia:" />
                <x-jet-input type="text" class="w-full" wire:model="nombre" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre del Docente:" />
                <x-jet-input type="text" class="w-full" wire:model="docente" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Carrera:" />
                <div class="flex justify-center">
                    <div>
                        <div class="form-check">
                            <input wire:model="c1" name="carrera1"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="checkbox" value="{{ $carrera1->id }}" id="flexCheckDefault">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                                {{ $carrera1->nombre }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input wire:model="c2" name="carrera2"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="checkbox" value="{{ $carrera2->id }}" id="flexCheckDefault">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                                {{ $carrera2->nombre }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input wire:model="c3" name="carrera3"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="checkbox" value="{{ $carrera3->id }}" id="flexCheckDefault">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                                {{ $carrera3->nombre }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <x-jet-label value="Grupo de WhatsApp:" />
                <x-jet-input type="text" class="w-full" wire:model="grupo" placeholder='enlace del grupo' />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="cancelar()" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="guardar()" wire:loading.attr="disabled" class="disabled:opacity-25">
                Crear Materia
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>

    {{-- MODAL EDITAR MATERIA --}}
    <x-jet-dialog-modal wire:model="open2">

        <x-slot name="title">
            Crear materia:
        </x-slot>

        <x-slot name="content">
            <div class="mb-4">
                <x-jet-label value="Sigla de la Materia:" />
                <x-jet-input wire:model='sigla' type="text" class=" w-full" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre de la Materia:" />
                <x-jet-input type="text" class="w-full" wire:model="nombre" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Nombre del Docente:" />
                <x-jet-input type="text" class="w-full" wire:model="docente" />
            </div>

            <div class="mb-4">
                <x-jet-label value="Carrera:" />
                <div class="flex justify-center">
                    <div>
                        <div class="form-check">
                            <input wire:model="c1" name="carrera1"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="checkbox" value="{{ $carrera1->id }}" id="flexCheckDefault">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                                {{ $carrera1->nombre }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input wire:model="c2" name="carrera2"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="checkbox" value="{{ $carrera2->id }}" id="flexCheckDefault">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                                {{ $carrera2->nombre }}
                            </label>
                        </div>

                        <div class="form-check">
                            <input wire:model="c3" name="carrera3"
                                class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="checkbox" value="{{ $carrera3->id }}" id="flexCheckDefault">
                            <label class="form-check-label inline-block text-gray-800" for="flexCheckDefault">
                                {{ $carrera3->nombre }}
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <x-jet-label value="Grupo de WhatsApp:" />
                <x-jet-input type="text" class="w-full" wire:model="grupo" placeholder='enlace del grupo' />
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="cancelar()" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="update()" wire:loading.attr="disabled" class="disabled:opacity-25">
                Actualizar
            </x-jet-danger-button>
        </x-slot>
    </x-jet-dialog-modal>



    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>



    @push('js')

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <script>
            Livewire.on("alert", alert => {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: '¡Has inscrito tus materias exitosamente!',
                    showConfirmButton: false,
                    timer: 1500
                })
            })
        </script>
        <script>
            Livewire.on("alert2", function(message) {
                const Toast = Swal.mixin({
                    toast: true,
                    position: "top-end",
                    showConfirmButton: false,
                    timer: 2500,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener("mouseenter", Swal.stopTimer);
                        toast.addEventListener("mouseleave", Swal.resumeTimer);
                    },
                });
                Toast.fire({
                    icon: "error",
                    title: message,
                });
            });
        </script>

    @endpush


</div>
