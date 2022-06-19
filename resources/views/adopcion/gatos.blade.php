@extends('layouts.app')
@section('content')
<style>
 footer{
position:fixed;
left:0px;
margin-top:10px;
bottom:0px;
height:50px;
width:100%;
}


    </style>
<div class="container font-bold bg-gray-300" style="width:100%">
<h2 class ="m-10 text-3x1 text-center p-7 text-blue-900">Listado de gatos</h2>
</div>
<div style="text-align:right; width:100%;">
@can('crear-animales')
<a href="{{ route('adopcion.anadir_gatos') }}">
            <button name='selecionar 'class="bg-green-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded">Añadir gato</button>
            </a>
            @endcan
</div>
    <div class="flex flex-row justify-between grid grid-cols-3 gap-6 mx-20 ">


       @foreach($animales as $animal )
        <div>
            <a href="{{ route('adopcion.show',$animal->id) }}" >
          <img src="{{ url('images/'.$animal->Imagen) }}" class="width:300px 
            w-1/2 heightrounded img-fluid" alt="mi foto"></a>
            <br>
            <h4 style="min-height:45px;margin:5px 0 10px 0 text-lg">
                {{$animal->nombre}}
              
            </h4>
            
        </div>
        @endforeach
    </div>
</div>

@endsection