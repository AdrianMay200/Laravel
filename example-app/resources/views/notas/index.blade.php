@foreach($notas as $nota)

<div>
    {{$nota->palabrasC}}
    <a href="{{ url('/notas/' . $nota->id) }}" title="View Note">ver nota</a>
    <a href="{{ url('/notas/' . $nota->id) . '/edit' }}" title="View Note">Editar</a>

    <form method="POST" action="{{ url('/notas/' . $nota->id) }}" accept-charset="UTF-8">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
    <button type="submit" title="Delete Note" onclick="return confirm(&quot;¿Estás seguro? Se eliminará definitivamente&quot;)">
        eliminar
    </button>
</form>

</div>

@endforeach