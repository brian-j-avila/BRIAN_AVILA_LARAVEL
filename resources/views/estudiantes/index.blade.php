@extends('layouts.app')
@section('content')
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
    {{Session::get('mensaje')}}
</div>
@endif
<div class="container">
    @if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
    @endif
    <a href="{{url('/estudiantes/create')}}" class="btn btn-success">Crear un nuevo estudiante</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>foto</th>
                <th>nombre</th>
                <th>primer apellido</th>
                <th>segundo apellido</th>
                <th>correo</th>
                <th>acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiantes)
            <tr>
                <td>{{$estudiantes->id}}</td>
                <td><img src="{{asset('storage').'/'.$estudiantes->foto}}" alt="" style="height: 100px; width:100px;"></td>
                <td>{{$estudiantes->nombre}}</td>
                <td>{{$estudiantes->primerapel}}</td>
                <td>{{$estudiantes->segundoapel}}</td>
                <td>{{$estudiantes->correo}}</td>
                <td>
                    <div class="accion" style="display: flex; justify-content:center; align-items: center; margin-left:0;">
                        <a href="{{url('/estudiantes/'.$estudiantes->id.'/edit')}}" class="btn btn-info" style="width:auto; font-size:10px;">Editar</a> | <form action="{{url('/estudiantes/'.$estudiantes->id)}}" method="post" style="width: 20px;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" onclick="return confirm ('¿Deseas eliminar?')" value="ELIMINAR" class="btn btn-danger" style="width:auto; font-size:10px;">
                        </form>


                    </div>
                </td>
            </tr>

            @endforeach
        </tbody>

{!! $estudiantes->Links() !!}

    </table>


</div>
@endsection