@extends('layouts.app')
@section('content')

ACTUALIZAR DATOS DEL ESTUDIANTE:
<br>
    <label for="nombre">NOMBRE:</label>
    <br>
    <input type="text" name="nombre" id="nombre" value="{{$estudiantes->nombre}}">
    <br>
    <label for="primerapel">PRIMER APELLIDO:</label>
    <br>
    <input type="text" name="primerapel" id="primerapel" value="{{$estudiantes->primerapel}}">
    <br>
    <label for="segundoapel">SEGUNDO APELLIDO:</label>
    <br>
    <input type="text" name="segundoapel" id="segundoapel" value="{{$estudiantes->segundoapel}}">
    <br>
    <label for="correo">CORREO:</label>
    <br>
    <input type="email" name="correo" id="correo"value="{{$estudiantes->correo}}">
    <br>
    <label for="foto">FOTO:</label>
    <br>
    <img src="{{asset('storage').'/'.$estudiantes->foto}}" alt="" style="height: 110px;">
    <br>
    <input type="file" name="foto" id="foto" value="" class="btn btn-warning">
    <br>
    <input type="submit" value="ENVIAR" class="btn btn-success">
    @if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>

</div>
@endif
    

@endsection