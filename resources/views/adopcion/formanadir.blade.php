<style type="text/css">
   footer{
    position:fixed;
     left:0px;
     margin-top:10px;
    bottom:0px;
    height:50px;
     width:100%;
    }
    </style>
<form class="w-full max-w-lg border-4 " method="POST" action="{{ route('adopcion.store') }}" enctype="multipart/form-data">
    @csrf

     <h1 class="font-semibold py-5 text-blue mb-10 bg-blue-900 text-white px-5"> Formulario </h1>
     <div class="flex flex-wrap -mt-10">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="id_razas">
                {{ __("id_razas:") }}
            </label>
            <input name="id_razas"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="razas" type="number">
            @error("id_razas")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <br><br>
    <div class="flex flex-wrap -mt-10">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="nombre">
                {{ __("Nombre:") }}
            </label>
            <input name="nombre"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="nombre" type="text">
            @error("nombre")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="edad">
                {{ __("Edad:") }}
            </label>
            <input name="edad"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight
             focus:outline-none focus:bg-white focus:border-gray-500" id="edad" type="number">
            @error("autor")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
          <br><br>

    <input type="file" name="Imagen">

    </div>
    <div class="flex flex-wrap mt-3 ">
        <div class="w-full px-5">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold my-5" for="observaciones">
                {{ __("Observaciones:") }}
            </label>
            <input name="observaciones"  class="appearance-none block w-full bg-gray-300 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight 
            focus:outline-none focus:bg-white focus:border-gray-500" id="observaciones" type="text">
            @error("observaciones")
            <div class="border border-red-400 rounded-b bg-red-100 mt-1 px-4 py-3 text-red-700">
                {{ $message }}
            </div>
            @enderror
        </div>
    </div>
    
    <div class="md:flex md:items-center">
        <div class="md:w-1/3">
            <button class="shadow bg-teal-400 mt-5 hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                {{ 'Añadir' }}
            </button>
        </div>
    </div>
</form>
</div>