<form action="{{ url('recordatorios') }}" method="post">
        {!! csrf_field() !!}
    <div>
    <label>hhh</label>    
    <input type="date" name="Fecha" id="Fecha">

        <input type="text" name="Recordatorio" id="Recordatorio">


        <input type="text" name="Importancia" id="Importancia">

        <input type="text" name="temas" id="temas">

        <input type="submit" value="Enviar">
        

    </div>
</form>