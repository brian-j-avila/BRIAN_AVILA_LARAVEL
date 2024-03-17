<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
FORMULARIO QUE TENDRA EL CREAR Y ACTUALIZAR DATOS
    <label for="nombre">NOMBRE</label>
    <input type="text" name="nombre" id="nombre" value="{{$estudiantes->nombre}}">
    <br>
    <label for="primerapel">PRIMER APELLIDO</label>
    <input type="text" name="primerapel" id="primerapel" value="{{$estudiantes->primerapel}}">
    <br>
    <label for="segundoapel">SEGUNDO APELLIDO</label>
    <input type="text" name="segundoapel" id="segundoapel" value="{{$estudiantes->segundoapel}}">
    <br>
    <label for="correo">CORREO</label>
    <input type="email" name="correo" id="correo"value="{{$estudiantes->correo}}">
    <br>
    <label for="foto">FOTO</label>
    <img src="{{asset('storage').'/'.$estudiantes->foto}}" alt="">
    <input type="file" name="foto" id="foto" value="">
    <br>
    <input type="submit" value="ENVIAR">

</body>
</html>