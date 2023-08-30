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

<h1 class="titulo">AGREGAR PUBLICACION</h1>
<div class="container form-create ">



<form method="POST" action="{{ route('administrador.store')}}" enctype="multipart/form-data">
  @csrf
      
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control form-inpt" name="nombre" value="{{ old('nombre')}}">
        <div id="nombre" class="nombre form-ing"></div> 

        <label for="Precio" class="form-label">Precio</label>
        <input type="number" class="form-control" name="precio" value="{{ old('precio')}}">
        <div id="precio" class="precio form-ing" ></div>
      
      <label for="Huespedes" class="form-label">Huespedes</label>
        <input type="number" class="form-control" name="huespedes" value="{{ old('huespedes')}}">
        <div id="huespedes" class="huespedes form-ing"></div>

      <label for="Superficie" class="form-label">Superficie mts2</label>
        <input type="number" class="form-control" name="superficie" value="{{ old('superficie')}}">
        <div id="superficie" class="superficie form-ing"></div>

      <div class="mb-3 form-ing">
      <label for="imagen" class="form-label">Imagen</label>
      <input class="form-control" type="file" id="formFile" name="imagen" value="{{ old('imagen')}}" >
      </div>
      <div class="form-group form-ing">
      <label for="Descripcion" class="form-label">Descripcion</label>
                <textarea class="form-control"  placeholder="Descripcion" rows="4" name="descripcion" value="{{ old('descripcion')}}"></textarea>
            </div>


      <button type="submit" class="sbmt-btn">AGREGAR</button>
      <a href="{{ route('administrador.index')}}" class="cancl-btn"> CANCELAR </a>
</form>
</div>


@endsection