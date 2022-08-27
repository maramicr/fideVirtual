@extends('layouts.plantilla')

@section('title','Vista Create de Agenda')

@section('sidebar')
    @parent

    {{-- <p>Espacio para información adicional.</p> --}}
@endsection

@section('content')
    {{-- <h1>!Bienvenido a la página de creación de agenda tu tutoría¡</h1> --}}

<form action="{{ route('agenda.store') }}"
method="POST">
 {{-
- <form action="../agenda" method="POST">
--}}
 {{-
- <input type="hidden" name="_method" value="POST"> --}}
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <!-- csrf_token -->
 <div style="text-align: left; fontfamily: Arial">
 <strong><span id="idFotograma" style="font-family: Arial; fontsize: 24pt">CONCERTAR UNA TUTORÍA</span></strong>
 <br />
 <br />
 Alumno:<br />
 <input name="nombreAlumno" type="text" id="nombreAlumno" style="width:504px;"/><br />
 @error('nombreAlumno')
 <br>
 <small>{{ $message }}</small>
 <br>
 @enderror
 Con el profesor:<br/>
 <select name="idProfesor" id="idProfesor" style="fontsize:Medium;width:296px;">

    <option value="1">
    Eduardo González Paniagua</option>
    <option value="2">
    Armenia Monge Soto</option>
    <option value="3">
    Cleimer Solis Vargas</option>
    <option value="4">
    Andrea Rodriguez Vargas</option>
    <option value="5">
    José Angel Cedeño Nuñez</option>
    </select><br />
    @error('idProfesor')
    <br>
    <small>{{ $message }}</small>
    <br>
    @enderror
    Día:<br />
    <select name="idDia" id="idDia" style="font-size:Medium;">
    <option value="1">lunes</option>
    <option value="2">martes</option>
    <option value="3">mi&#233;rcoles</option>
    <option value="4">jueves</option>
    <option value="5">viernes</option>
    </select><br />
    @error('idDia')
    <br>
    <small>{{ $message }}</small>
    <br>
    @enderror
    Hora: &nbsp;
    <span id="sHora">
    <label for="lHora10">10</label>

    <input id="hora" type="radio"name="hora" value="10" checked="checked" />
 <label for="lhora12">12</label>
 <input id="hora" type="radio"name="hora" value="12" />
 <label for="lhora16">16</label>
 <input id="hora" type="radio"name="hora" value="16" />
 <label for="lhora18">18</label>
 <input id="hora" type="radio"name="hora" value="18" /></span><br/>
 @error('hora')
 <br>
 <small>{{ $message }}</small>
 <br>
 @enderror
 Asunto:<br />
 <textarea name="asunto" rows="2" cols="20" id="asunto" style="height:64px;width:440px;"></textarea><br/>@error('asunto')
 <br>
 <small>{{ $message }}</small>
 <br>
 @enderror
 <input type="submit" name="btEnviar" value="Enviar datos" id="btEnviar" style="width:112px;" />&nbsp;
 <input type="reset" name="btRestablecer" value="Restablecer" id="btRestablecer" style="width:112px;" />
 </div>
</form>

@endsection


