

<x-app-layout>


<main>
    <div >
        <h1 class="p-4 mt-2 text-3xl font-bold text-center text-orange-300 bg-gray-800">
            Listado de Recordatorios
        </h1>
    </div>
    <br>
    <br>
    <a href="{{ url('/recordatorios/create') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Agregar Recordatorios
    </a>
    <br>
    <br>
    <center>
        <table class="table-fixed">
            <thead>
                <tr class="bg-yellow-400">
                    <th class="px-6">ID</th>
                    <th class="px-6">Fecha</th>
                    <th class="px-6">Recordatorio</th>
                    <th class="px-6">Importancia</th>
                    <th class="px-6">ID de Usuario</th>
                    <th class="px-6">ID del Tema</th>
                    <th class="px-6"><a href="#"></a></th>
                    <th class="px-6">Acciones</th>
                    <th class="px-6"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recordatorio as $recordatorios)
                    <tr>
                        <td>{{ $recordatorios->id }}</td>
                        <td>{{ $recordatorios->fecha }}</td>
                        <td>{{ $recordatorios->recordatorio }}</td>
                        <td>{{ $recordatorios->importancia}}</td>
                        <td>{{ $recordatorios->id_users }}</td>
                        <td>{{ $recordatorios->id_temas }}</td>
                        <td><td><a href="{{ url('/recordatorios/' . $recordatorios->id) . '/edit' }}" ><img src="https://cdn-icons-png.flaticon.com/512/1160/1160515.png" alt="Editar" height="40px" width="40px"></a></td>
                        <td><br>
                        <form method="POST" action="{{ url('/recordatorios' . '/' . $recordatorios->id) }}" accept-charset="UTF-8" class="form-delete">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <button type="submit" title="Eliminar" onclick="return confirm(&quot;¿Seguro de querer eliminarlo?&quot;)">
    <img src="https://cdn-icons-png.flaticon.com/512/1214/1214926.png" alt="Eliminar" height="40px" width="40px">
    </button>
</form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </center>
</main>
</x-app-layout>
