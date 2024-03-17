<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100%;
            margin: 10px;
            padding: 10px;
        }

        img {
            width: 100%;
            height: 100%;
        }

        table {
            width: 95%;
            text-align: center;
            margin: 20px;
            padding: 20px;
            background-color: black;
            color: white;
        }

        tbody td {
            width: 120px;
            height: 140px;
            margin: 0;
            padding: 0;
            border: 2px solid white;
        }
    </style>
</head>

<body>
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
                <td><img src="{{asset('storage').'/'.$estudiantes->foto}}" alt=""></td>
                <td>{{$estudiantes->nombre}}</td>
                <td>{{$estudiantes->primerapel}}</td>
                <td>{{$estudiantes->segundoapel}}</td>
                <td>{{$estudiantes->correo}}</td>
                <td><a href="{{url('/estudiantes/'.$estudiantes->id.'/edit')}}">Editar</a> |
                    <form action="{{url('/estudiantes/'.$estudiantes->id)}}" method="post">
                        @csrf
                        @method('DELETE') 
                        <input type="submit" onclick="return confirm ('¿Deseas eliminar?')" value="ELIMINAR">
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>