@extends('layouts.app')
@section('content')

<div class="container font-bold bg-gray-300" style="width:100%">
<h2 class ="m-10 text-3x1 text-center p-7 text-blue-900">Listado de Animales</h2>
</div>
    <div class="flex flex-row justify-between grid grid-cols-3 gap-6 mx-20 ">
       @foreach($animales as $animal )
        <div>
            <a ><img src="{{ url('images/'.$animal->Imagen) }}" class="width:300px 
            w-1/2 heightrounded img-fluid" alt="mi foto"></a>
            <br>
            <h4 style="min-height:45px;margin:5px 0 10px 0 text-lg">
                {{$animal->nombre}}
            </h4>
        </div>
        @endforeach
    </div>
</div>

@stop 