<form action="{{ url('notas') }}" method="post">
        {!! csrf_field() !!}
    <div>
    <label>hhh</label>    
    <input type="text" name="Palabras_clave" id="Palabras_clave">

        <input type="text" name="Resumen" id="Resumen">


        <input type="text" name="Contenido" id="Contenido">

        <input type="text" name="temas" id="temas">

        <input type="submit" value="Enviar">
        

    </div>
</form>

