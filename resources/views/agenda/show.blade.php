@extends('layouts.plantilla')

@section('title','Vista Show de Agenda')

@section('sidebar')
    @parent

    <p>Espacio para información adicional.</p>
@endsection

@section('content')
    <h1>!Bienvenido a la página de mostrar una agenda de tutoría¡</h1>
    <h2>Parámetro enviado por path parameter:  {{$agenda}} </h2>
@endsection


