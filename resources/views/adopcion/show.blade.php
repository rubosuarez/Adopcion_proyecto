@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</head>
<body>


@section('content')



    <br>

    <img src="<?php echo asset('images/' . $Animal->Imagen); ?>" alt="{{$Animal->Imagen}}">
    <br>
    <h1><strong>Nombre: {{$Animal->nombre}}</strong> </h1>
    <br>
    <p><strong>Edad: {{$Animal->edad}}</strong></p>
    <br>
    <p><strong>Observaciones: {{$Animal->observaciones}}</strong></p>
    <br>
     <table>
    <tr>
   

     <form action="{{ route('adopcion.edit',$Animal->id) }}" method="post" > 
                    @can('borrar-animales')
                    <td><input type="submit" name="editar" value="editar" class="bg-blue-500 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded" ></td>
                    @endcan
                    @csrf
                    
                </form>            
               
                <form action="{{ route('adopcion.eliminar',$Animal->id) }}" method="post">
                    @csrf
                    @method('post')
                    @can('borrar-animales')
                    <td><input type="submit" name="eliminar" value="borrar" class="bg-red-500 hover:bg-red-500 text-white font-bold py-2 px-4 rounded" ></td>
                    @endcan
                </form>
                    <tr>

                    </table> 

                    <br>
        <form action="{{ route('adopcion.actualizar_adoptante',$Animal->id) }}" method="post">
        @csrf 
        @method('put')
        @if(Auth::user())
        <input type="submit" class="bg-green-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded" name="Actualizar" value="Quiero adoptar">          
       @endif
       </form>
       <br/>   
       <button class="bg-green-500 hover:bg-green-500 text-white font-bold py-2 px-4 rounded" ><a href="{{url('/')}}">Volver al Inicio </a></button>                         
   
                    @endsection

</body>
</html>