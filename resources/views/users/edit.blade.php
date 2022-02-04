@extends('plantilla.app')

@section('title', 'Usuarios-editar')

@section('content')
<br>

<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
      <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
        <div class="max-w-md mx-auto">
          <div class="flex items-center space-x-5">
            <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
              <h2 class="leading-relaxed">Editar usuario</h2>
            </div>
          </div>
          <form method="post" action="{{ route('admin.users.update', $user) }}" >
            @csrf
            @method('PATCH') 
          <div class="divide-y divide-gray-200">
            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
              <div class="flex flex-col">
                <label class="leading-loose">Nombre</label>
                <input id="name" type="text" value="{{old('name', $user->name)}}" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> 
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
              <div class="flex flex-col">
                <label class="leading-loose">E-mail</label>
                <input id="email" type="email" value="{{old('email', $user->email)}}" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
              <div class="flex flex-col">
                <label class="leading-loose">Contraseña</label>
                <input id="password" type="password" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600 @error('password') is-invalid @enderror" name="password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="flex flex-col">
                <label class="leading-loose">Rol</label>
                <select name="roles" class="form-control" id="select-roles" >
                        @foreach ($roles as $rol)
                            <option value="{{ $rol->id }}">{{ $rol->name}}</option>
                        @endforeach 
                </select> 
            </div>

            
            </div>
            <div class="row">
                    <a href="{{route('admin.users.index')}}"class="btn btn-warning mt-2">Volver</a> 
                    <button type="submit" class="btn btn-primary">
                        {{ __('Actualizar') }}
                    </button>
            </div>
          </div>
        </form> 
        @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
        </div>
      </div>
    </div>
  </div>
@stop

@section('css')

@stop

@section('js')
   
@stop