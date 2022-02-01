@extends('plantilla.app')

@section('title','Materias')

@section('content')
    @livewire('estudiantes',['materia'=>$materia_id])
@stop

@section('css')

@stop

@section('js')
@stop