<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class PublicacionController extends Controller
{

    public function index(){
        $publicaciones = Publicacion::where('is_active', true)
        ->orderBy('id')
        ->paginate(4);
        return view('publicaciones.index', [
            'publicaciones' => $publicaciones
        ]);
    }


   public function show(Publicacion $publicacion){
        return view('publicaciones.show', [
            'publicacion' => $publicacion
        ]);
    }


}
