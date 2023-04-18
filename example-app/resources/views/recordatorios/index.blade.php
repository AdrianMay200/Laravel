@foreach($recordatorio as $recordatorios)

<div>
    {{$recordatorios->recordatorio}}
    <a href="{{ url('/recordatorios/' . $recordatorios->id) }}" title="View Note">ver nota</a>
    <a href="{{ url('/recordatorios/' . $recordatorios->id) . '/edit' }}" title="View Note">Editar</a>

    <form method="POST" action="{{ url('/recordatorios/' . $recordatorios->id) }}" accept-charset="UTF-8">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
    <button type="submit" title="Delete Note" onclick="return confirm(&quot;¿Estás seguro? Se eliminará definitivamente&quot;)">
        eliminar
    </button>
</form>

</div>

@endforeach