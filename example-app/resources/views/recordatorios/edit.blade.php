<form action="{{ url('recordatorios/' . $recordatorio->id) }}" method="post">
        {!! csrf_field() !!}
    <div>
        @method("PATCH")
    <label>hhh</label>    
    <input type="text" value="{{$recordatorio->fecha}}" name="Fecha" id="Fecha">

        <input type="text" value="{{$recordatorio->recordatorio}}" name="Recordatorio" id="Recordatorio">


        <input type="text" value="{{$recordatorio->importancia}}" name="Importancia" id="Importancia">

        <input type="text" value="{{$recordatorio->temas->nombre}}" name="temas" id="temas">

        <input type="submit" value="Enviar">
        

    </div>
</form>