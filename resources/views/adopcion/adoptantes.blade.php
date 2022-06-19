@extends("layouts.app")
@section("content")
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
<div class="container font-bold bg-gray-300" style="width:100%">
    <h2 class ="m-10 text-3x1 text-center p-7 text-blue-900">Listado de Adoptantes</h2>
</div>

<table class="border-separate border-2 text-center border-gray-500 mt-3" style="width:100%">
   
<thead>
    <tr>
       <th class="px-4 py-2">{{("Nombre - adoptante")}}</th>
       <th class="px-4 py-2">{{("Apellidos")}}</th>
       <th class="px-4 py-2">{{("Nombre - animal")}}</th>
       <th class="px-4 py-2">{{("Raza - animal")}}</th>
       <th class="px-4 py-2">{{("Direccion")}}</th>
       <th class="px-4 py-2">{{("Localidad")}}</th>
       <th class="px-4 py-2">{{("Telefono")}}</th>
       <th class="px-4 py-2">{{("E-mail")}}</th>
       <th class="px-4 py-2">{{("Fecha_adopcion")}}</th>
       <th class="px-4 py-2">{{("Fecha_devolucion")}}</th>
       <th colspan="2" class="px-4 py-2 ">{{("Observaciones")}}</th>
       
    </tr>
</thead>
<tbody>
    @foreach($datos as $adoptante)
        <tr>

            <td class="px-4 py-2">{{$adoptante->nombre_cliente}}</td>
            <td class="px-4 py-2">{{$adoptante->apellidos}}</td>
            <td class="px-4 py-2">{{$adoptante->nombre}}</td>
            <td class="px-4 py-2">{{$adoptante->raza}}</td>
            <td class="px-4 py-2">{{$adoptante->direccion}}</td>
            <td class="px-4 py-2">{{$adoptante->localidad}}</td>
            <td class="px-4 py-2">{{$adoptante->telefono}}</td>
            <td class="px-4 py-2">{{$adoptante->email}}</td>
            <td class="px-4 py-2">{{$adoptante->fecha_adopcion}}</td>
            <td class="px-4 py-2">{{$adoptante->fecha_devolucion}}</td>
            <td class="px-4 py-2">{{$adoptante->observaciones}}</td>
          
        </tr>

     @endforeach
</tbody>
</table>
@endsection

