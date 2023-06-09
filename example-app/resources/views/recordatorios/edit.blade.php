
<x-app-layout>

<div >
        <h1 class="p-4 mt-2 text-3xl font-bold text-center text-orange-300 bg-gray-800">
            Crear Nota
        </h1>
    </div>

<form action="{{ url('recordatorios/' .$recordatorio->id) }}" method="post" class="w-full max-w-lg mx-auto p-28">
        {!! csrf_field() !!}
        @method("PATCH")
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Fecha
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="date" value="{{$recordatorio->fecha}}" name="Fecha" id="Fecha">
    </div>
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Recordatorio
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" value="{{$recordatorio->recordatorio}}" name="Recordatorio" id="Recordatorio">
    </div>

    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Importancia
      </label>
      <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"  type="text" value="{{$recordatorio->importancia}}" name="Importancia" id="Importancia">
    </div>


    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Temas
      </label>
      <select id="temas" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="temas" :value="old('temas')" required autofocus autocomplete="temas">
    @foreach($temas as $tema)
        <option value="{{ $tema->id }}">{{ $tema->nombre }}</option>
    @endforeach
</select>
    </div>
  </div>
  <!-- Agrega más campos de formulario aquí -->
  <input type="submit" value="Actualizar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
</form>
</x-app-layout>
