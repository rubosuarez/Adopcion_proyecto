@extends('layouts.appusuarios')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Animales</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                            
                   
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{ route('animales.update',$animales->id) }}" method="POST" enctype='multipart/form-data'>>
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="id">id</label>
                                   <input type="text" name="id" class="form-control" value="{{ $animales->id }}">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombre">nombre</label>
                                   <input type="text" name="nombre" class="form-control" value="{{ $animales->nombre }}">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="edad">edad</label>
                                   <input type="text" name="edad" class="form-control" value="{{ $animales->edad }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                    
                                <div class="form-floating">
                                <label for="observaciones">Observaciones</label>
                                <textarea class="form-control" name="observaciones" style="height: 100px">{{ $animales->obsservaciones }}</textarea>                                
                                
                                </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>                            
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection