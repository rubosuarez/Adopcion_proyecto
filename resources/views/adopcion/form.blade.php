<form class="w-full max-w-lg border-4 " method="POST" action="{{ route('libros.update', $libro) }}" enctype='multipart/form-data'>

    @csrf
@method('PUT')
     <h1 class="font-semibold py-5 text-blue mb-10 bg-blue-900 text-white px-5"> Editar Libro </h1>
    
    <div class="flex flex-wrap -mt-10">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="titulo">
                {{ __("Titulo") }}
            </label>
            <input name="titulo"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{$libro->titulo}}" type="text">
          
            @error("titulo")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="autor">
                {{ __("Autor") }}
            </label>
            <input name="autor"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{$libro->autor}}" type="text">
         
            @error("autor")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>


    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="tema">
                {{ __("Tema") }}
            </label>
            <input name="tema"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{$libro->tema}}" type="text">
         
            @error("tema")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="unidades">
                {{ __("Unidades") }}
            </label>
            <input name="unidades"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" value="{{$libro->unidades}}" type="number">
         
            @error("unidades")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="unidades">
                {{ __("Imagen") }}
            </label>
            <img src="<?php echo asset('images/' . $libro->imagen); ?>" alt="{{$libro->imagen}}">
        </div>
    </div>
  
    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 mt-5 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{ 'Editar' }}
            </button>
        </div>
    </div>
</form>
</div>