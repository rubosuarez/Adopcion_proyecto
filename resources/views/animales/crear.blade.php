@extends('layouts.appusuarios')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear animales</h3>
        </div>
        <div class="section-body">
            <div style="display:flex; flex-wrap:wrap magin-left:0px !important">
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

                    <form action="{{ route('animales.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="id">id</label>
                                   <input type="text" name="id" class="form-control">
                                </div>
                            </div>
                            <div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="id_razas">id_razas</label>
                                   <select name="id_razas" class="form-control">
                                       @foreach($id_razas as $razas)
                                       <option value="{{$razas->id}}">{{$razas->id}}</option>
                                       @endforeach
                                  </select>     
                                </div>
                            </div>

                            <div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombre">nombre</label>
                                   <input type="text" name="nombre" class="form-control">
                                </div>
                            </div>

                            <div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="edad">edad</label>
                                   <input type="number" name="edad" class="form-control">
                                </div>
                            </div>

                            <div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                            <label for="imagen">imagen</label><br/>
                            <input type="file" name="Imagen">
                            </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">                  
                                <div class="form-floating">
                                <label for="observaciones">observaciones</label>
                                <textarea class="form-control" name="observaciones" style="height: 100px"></textarea>
                                
                                </div>
                            <br/>
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