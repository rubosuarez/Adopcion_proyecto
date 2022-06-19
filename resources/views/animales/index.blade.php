@extends('layouts.appusuarios')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Animales</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-animales')
                        <a class="btn btn-warning" href="{{ route('animales.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">id</th>
                                    <th style="color:#fff;">id</th>  
                                    <th style="color:#fff;">Nombre</th>                                    
                                    <th style="color:#fff;">Edad</th>
                                    <th style="color:#fff;">Observaciones</th>  
                                    <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($animales as $animal)
                            <tr>
                                <td style="display: none;">{{ $animal->id }}</td>                                
                                <td>{{ $animal->id}}</td>
                                <td>{{ $animal->nombre}}</td>
                                <td>{{ $animal->edad }}</td>
                                <td>{{ $animal->observaciones}}</td>
                                <td>
                                    <form action="{{ route('animales.destroy',$animal->id) }}" method="POST">                                        
                                        @can('editar-animales')
                                        <a class="btn btn-info" href="{{ route('animales.edit',$animal->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-animales')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                         
                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection