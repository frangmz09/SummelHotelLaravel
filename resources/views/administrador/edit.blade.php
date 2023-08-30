@extends('layouts.app')

@section('content')
@if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<h1 class="titulo">EDITAR PUBLICACION</h1>
<div class="container form-create">
<form method="post" action="{{ route('administrador.update', $publicacion)}} " enctype="multipart/form-data">
  @csrf
  @method ('PUT')      
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control form-inpt" name="nombre" value="{{ $publicacion->nombre }}">
        <div id="nombre" class="nombre form-ing"></div> 

        <label for="Precio" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio" value="{{ $publicacion->precio }}">
        <div id="precio" class="precio form-ing" ></div>
      
        <label for="Huespedes" class="form-label">Huespedes</label>
        <input type="number" class="form-control" name="huespedes" value="{{ $publicacion->huespedes }}">
        <div id="huespedes" class="huespedes form-ing"></div>

        <label for="Superficie" class="form-label">Superficie mts2</label>
        <input type="number" class="form-control" name="superficie" value="{{ $publicacion->superficie }}">
        <div id="superficie" class="superficie form-ing"></div>

        <div class="mb-3 form-ing">
        <label for="imagen" class="form-label">Imagen</label> <p>(Si no ingresa nada la imagen serguirá siendo la misma)</p>
        <input class="form-control" type="file" id="formFile" name="imagen" >
        </div>
        <div class="mb-3 form-ing">
        <input class="form-control" type="hidden" name="imagen_backup" value="{{ $publicacion->imagen }}" >
        </div>
        <div class="form-group form-ing">
        <label for="Descripcion" class="form-label">Descripcion</label>
                <textarea class="form-control"  placeholder="Descripcion" rows="4" name="descripcion" >{{ $publicacion->descripcion }}</textarea>
            </div>


        <button type="submit" class="sbmt-btn">MODIFICAR</button>
        <a href="{{ route('administrador.index')}}" class="cancl-btn"> CANCELAR </a>
</form>
</div>

@endsection