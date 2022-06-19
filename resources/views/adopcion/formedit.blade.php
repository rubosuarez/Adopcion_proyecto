<form class="w-full max-w-lg border-4 " method="post" action="{{ route('adopcion.update2', $Animal) }}" enctype='multipart/form-data'>

    @method ('put')
    @csrf

     <h1 class="font-semibold py-5 text-blue mb-10 bg-blue-900 text-white px-5"> Editar Perro </h1>
    
    <div class="flex flex-wrap -mt-10">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="nombre">
                {{ __("Nombre") }}
            </label>
            <input name="nombre"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{$Animal->nombre}}" type="text">
          
            @error("Nombre")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="edad">
                {{ __("Edad") }}
            </label>
            <input name="edad"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{$Animal->edad}}" type="number">
         
            @error("Edad")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="Imagen">
                {{ __("Imagen") }}
            </label>
            <img src="{{ url('images/'.$Animal->Imagen) }}" alt="{{$Animal->Imagen}}">
            <br>
            <input type='file' name='Imagen' required>
        </div>
    </div>

    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="observaciones">
                {{ __("Observaciones") }}
            </label>
            <input name="observaciones"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{$Animal->observaciones}}" type="text">
         
            @error("Observaciones")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <input type="hidden" name="id" value="{{$Animal->id}}">
  
    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 mt-5 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{ 'Editar' }}
            </button>
        </div>
    </div>
</form>
</div>