<form action="{{url('/estudiantes')}}" method="post" enctype="multipart/form-data">
@csrf
<label for="nombre">NOMBRE</label>
    <input type="text" name="nombre" id="nombre" >
    <br>
    <label for="primerapel">PRIMER APELLIDO</label>
    <input type="text" name="primerapel" id="primerapel">
    <br>
    <label for="segundoapel">SEGUNDO APELLIDO</label>
    <input type="text" name="segundoapel" id="segundoapel">
    <br>
    <label for="correo">CORREO</label>
    <input type="email" name="correo" id="correo">
    <br>
    <label for="foto">FOTO</label>
    <input type="file" name="foto" id="foto">
    <br>
    <input type="submit" value="ENVIAR">
    
</form>