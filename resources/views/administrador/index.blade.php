@extends('layouts.app')

@section('content')


<div id="information" class="spacer">
<div class="container">
       @if(Session('status'))
       <div class="alert alert-success">
              {{ Session('status') }}
       </div>
       @endif
       <h1 class="adm-title" >PANEL DE ADMINISTRADOR</h1>
       <div class="editorpublicaciones">
             <div class="row">
              <h2 class="adm-subtitle col-md-8">EDITOR DE PUBLICACIONES</h2>
              <div class="col-md-1 admb-btngreen">
                     <a href="{{ route('administrador.create') }} "class="link-btngreen">AGREGAR</a>
             </div>
             </div> 
             <div class="editorpublicaciones-selector">
              <div class="row">
                     <p class="col-md-2 adm-text-title"># HABITACION</p>
                     <p class="col-md-2 adm-text-title">TITULO</p>
                     <p class="col-md-2 adm-text-title">PRECIO</p>
                     <p class="col-md-3 adm-text-title">HUESPEDES</p>
                     <p class="col-md-3 adm-text-title">EDITAR</p>
              </div>
              @if ($publicaciones->count() > 0)
              @foreach ($publicaciones as $publicacion)
              <div class="row filaeditor">
              <p class="col-md-2 adm-textnro">{{ $publicacion->id }}</p>
              <p class="col-md-2 adm-text">{{ $publicacion->nombre }}</p>
              <p class="col-md-2 adm-textnro">{{ $publicacion->precio_format() }}</p>
              <p class="col-md-3 adm-textnro">{{ $publicacion->huespedes }}</p>
              <div class="col-md-3 adm-text">
                     <div class="row">
                            <div class="col-md-6">
                                   <form id="formd-id" action="{{ route('administrador.destroy', $publicacion) }}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   @if ($publicacion->is_active)
                                   <button id="form-submit" class="admb-delete" type="submit"><img src="{{asset('/images/photos/delete.png')}}" alt=""></button>
                                   </form>
                                   @else
                                   <button type="submit"  class="admb-restore"><img src="{{asset('/images/photos/restore.png')}}" alt=""></button>
                                   @endif
                            </div>
                            <div class="col-md-6">
                                   <a href="{{ route('administrador.edit', $publicacion) }}" class="admb-edit"><img src="{{asset('/images/photos/edit.png')}}" alt=""></a>
                            </div>
                     </div>
              </div>
             </div>
             @endforeach
             @else 
                <div class="row filaeditor">
                    <p class="col-md-12 adm-text"> NO HAY NINGUNA PUBLICACION CREADA</p>
                </div>
             @endif
             
             </div>
             <div class="col-md-12">{{ $publicaciones->links()}}</div>

             </div>

<!-- 
              <div class="visorhabitaciones">
              <div class="row">
                     <h2 class="adm-subtitle col-md-4">DISPONIBILIDAD HOTEL</h2>

                     <div class="col-md-4 selectadm"><select name="" id="">
                            <option value="">FILTRAR POR TIPO</option>
                     </select></div>
                     <div class="col-md-4 selectadm" ><select name="" id="">
                            <option value="">ORDENAR POR</option>
                     </select></div>
              </div> 
              <div class="editorpublicaciones-selector">
                     <div class="row">
                            <p class="col-md-2 adm-text">N° HABITACION</p>
                            <p class="col-md-2 adm-text">TIPO</p>
                            <p class="col-md-2 adm-text">HUESPEDES</p>
                            <p class="col-md-2 adm-text">ESTADO</p>
                            <p class="col-md-2 adm-text">FECHA ENTRADA</p>
                            <p class="col-md-2 adm-text">FECHA SALIDA</p>

                     </div>
                     <div class="row filaeditor">
                     <p class="col-md-2 adm-text">01</p>
                     <p class="col-md-2 adm-text">SUITE</p>
                     <p class="col-md-2 adm-text">2</p>
                     <p class="col-md-2 adm-text">LIBRE</p>
                     <p class="col-md-2 adm-text">02/05/23</p>
                     <p class="col-md-2 adm-text">17/05/23</p>
              </div>
              
              </div>
              </div> -->
</div>
</div>
@endsection