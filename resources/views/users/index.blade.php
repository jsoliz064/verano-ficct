@extends('plantilla.app')

@section('title', 'Usuarios')

@section('content')
<div class="card my-5 pt-8">
      <div align="center" class="py-8 font-bold text-xl underline">
          <h1> LISTA DE USUARIOS</h1>
      </div>
</div>
<div class="row">
  <div class="col">
    <div align="right">
        <a class="font-bold text-white text-md bg-green-500 rounded cursor-pointer hover:bg-red-600 py-2 px-4"  href="{{route('admin.users.create')}}">Registrar</a>
    </div>
  </div>
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
                Nombre</th>
            <th scope="col"
                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                Email</th>
            <th scope="col"
                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                rol</th>
            <th width="20%" scope="col"
                class="cursor-pointer px-8 py-2 text-left text-sm font-bold uppercase tracking-wider">
                Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class="mx-4 my-4 divide-y divide-gray-200 bg-white">
                <td class="px-4 py-2">
                    <span
                        class="px-2 py-1 inline-flex text-xl leading-10 font-semibold rounded-full
                bg-red-100 text-red-800">{{ $user->id }}
                    </span>
                </td>
                <td class="px-8 py-4">
                    <div class="text-md font-bold text-gray-900">
                        {{ $user->name }}
                    </div>
                </td>
                <td class="px-8 py-4">
                  <div class="text-md text-gray-500">
                      {{ $user->email }}
                  </div>
              </td>
              <td class="px-8 py-4">
                <div class="text-md text-gray-500">
                    {{ $user->roles_name }}
                </div>
            </td>
                <td class="my-3 inline-flex justify-center px-6 py-4 whitespace-nowrap flex">
                  <form action="{{route('admin.users.destroy', $user->id)}}" method="post">
                    @csrf
                    @method('delete')                              
                      <div class="whitespace-nowrap flex">
                        <a class="ml-2 font-bold text-white rounded cursor-pointer bg-gray-600 hover:bg-gray-700 py-2 px-4"
                          href="{{ route('admin.users.edit', $user->id) }}">
                            <i class="fas fa-edit"></i>
                        </a>
                      </div>
                      <div class="whitespace-nowrap flex">

                        <button class="ml-2 font-bold text-white rounded cursor-pointer bg-red-600 hover:bg-red-500 py-2 px-4"
                              onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" value="Borrar">
                              <i class="fas fa-trash-alt" aria-hidden="true"></i>
                            </button> 
                      </div>
                  </form>  
                </td>
            </tr>
        @endforeach
    </tbody>
</div>
@stop

@section('css')
 
@stop

@section('js')
    
@stop