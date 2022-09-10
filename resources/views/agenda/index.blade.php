
@extends('layouts.plantilla')

@section('title','Vista Index de Agenda')

@section('sidebar')
    @parent

    <p>Aquí se puede agregar información adicional a la heredada.</p>
@endsection

@section('content')
    <h1>!Bienvenido al registro de tutorías para el curso de PHP intermedio¡</h1>
    <h2>Listado de tutorías solicitadas</h2>
    <ul>
        @foreach ($oTutorias as $oTutoria)
            <li>
                <a href="{{route('agenda.show', $oTutoria)}}">{{$oTutoria->asunto}}</a>
            </li>
        @endforeach
    </ul>
@endsection
