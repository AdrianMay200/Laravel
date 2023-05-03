<x-app-layout>


<main>
    <div >
        <h1 class="p-4 mt-2 text-3xl font-bold text-center text-orange-300 bg-gray-800">
            Listado de Notas
        </h1>
    </div>
    <br>
    <br>
    <a href="{{ url('/notas/create') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
        Agregar Notas
    </a>
    <br>
    <br>
    <center>
        <table class="table-fixed">
            <thead>
                <tr class="bg-yellow-400">
                    <th class="px-6">ID</th>
                    <th class="px-6">Palabras clave</th>
                    <th class="px-6">Resumen</th>
                    <th class="px-6">Contenido</th>
                    <th class="px-6">ID de Usuario</th>
                    <th class="px-6">ID del Tema</th>
                    <th class="px-6"><a href="#"></a></th>
                    <th class="px-6">Acciones</th>
                    <th class="px-6"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($notas as $nota)
                    <tr>
                        <td>{{ $nota->id }}</td>
                        <td>{{ $nota->palabrasC }}</td>
                        <td>{{ $nota->resumen }}</td>
                        <td>{{ $nota->contenido }}</td>
                        <td>{{ $nota->id_users }}</td>
                        <td>{{ $nota->id_temas }}</td>
                        <td><td><a href="{{ url('/notas/' . $nota->id) . '/edit' }}" ><img src="https://cdn-icons-png.flaticon.com/512/1160/1160515.png" alt="Editar" height="40px" width="40px"></a></td>
                        <td><br>
                        <form method="POST" action="{{ url('/notas' . '/' . $nota->id) }}" accept-charset="UTF-8" class="form-delete">
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
