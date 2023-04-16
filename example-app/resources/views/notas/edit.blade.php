<form action="{{ url('notas/' . $nota->id) }}" method="post">
        {!! csrf_field() !!}
    <div>
        @method("PATCH")
    <label>hhh</label>    
    <input type="text" value="{{$nota->palabrasC}}" name="Palabras_clave" id="Palabras_clave">

        <input type="text" value="{{$nota->resumen}}" name="Resumen" id="Resumen">


        <input type="text" value="{{$nota->contenido}}" name="Contenido" id="Contenido">

        <input type="text" value="{{$nota->temas->nombre}}" name="temas" id="temas">

        <input type="submit" value="Enviar">
        

    </div>
</form>
