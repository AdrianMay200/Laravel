<form action="{{ url('notas') }}" method="post">
        {!! csrf_field() !!}
    <div>
    <label>hhh</label>    
    <input type="text" name="Palabras_clave" id="Palabras_clave">

        <input type="text" name="Resumen" id="Resumen">


        <input type="text" name="Contenido" id="Contenido">

        

        <input type="submit" value="Enviar">
        
        <select id="subject" class="block mt-1 w-full h-2/4 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" type="text" name="subject" :value="old('subject')" required autofocus autocomplete="subject">
    @foreach($temas as $tema)
        <option value="{{ $tema->id }}">{{ $tema->nombre }}</option>
    @endforeach
</select>
    </div>
</form>

