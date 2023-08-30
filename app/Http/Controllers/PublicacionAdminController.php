<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use Illuminate\Support\Facades\Validator;

class PublicacionAdminController extends Controller
{
    public function index(){
        $publicaciones = Publicacion::paginate(9);        
        return view('administrador.index', [
            'publicaciones' => $publicaciones
        ]);
    }


    public function edit($id){
        $publicacion =  Publicacion::find($id);
        $url_imagen = $publicacion->imagen;
        return view('administrador.edit', [
            'publicacion' => $publicacion,
            'url_imagen' => $url_imagen
        ]);
    }
    public function update(Request $request, $id) 
    {


        $publicacion = Publicacion::find($id);

        $validator = Validator::make($request->all(), [
            'nombre' => 'required | max:30',
            'precio' => 'required | numeric | max:999999',
            'huespedes' => 'required | numeric | max:10',
            'superficie' => 'required | numeric | max:300',
            'descripcion' => 'required | max:80',
            'imagen' => 'nullable|image|mimes:jpg,png,jpeg',
            'imagen_backup' => 'required'
        ], [
            'required' => 'El campo :attribute es obligatorio',
            'numeric' => 'El campo :attribute tiene que ser un numero',
            'nombre.required' => 'Debe ingresar el nombre de la publicacion',
            'imagen_backup.required' => 'Se borró el campo oculto'
        ]);

        if ($validator->fails()) {
            return redirect()
            ->route('administrador.edit', $publicacion)
            ->withErrors($validator)
            ->withInput();
        }

        

        if ($request->file('imagen') != null) {
            $imagen_nombre = time().$request->file('imagen')->getClientOriginalName();
            $ruta_imagen = $request->file('imagen')->storeAs('publicacion', $imagen_nombre, 'public');    
            $publicacion->update([
                'nombre' => $request->nombre,
                'precio' => $request->precio,
                'huespedes' => $request->huespedes,
                'superficie' => $request->superficie,
                'imagen' => $ruta_imagen,
                'descripcion' => $request->descripcion,
            ]);
        }else{
            $publicacion->update([
                'nombre' => $request->nombre,
                'precio' => $request->precio,
                'huespedes' => $request->huespedes,
                'superficie' => $request->superficie,
                'imagen' => $request->imagen_backup,
                'descripcion' => $request->descripcion,
            ]);
        }

        return redirect()->route('administrador.index')
        ->with('status', 'La publicacion ha sido modificada correctamente');
    }

    public function create()
    {
        return view('administrador.create');
    }
    public function destroy($id)
    {        
        $publicacion = Publicacion::find($id);

        if ($publicacion->is_active) {
            $publicacion->update([
                'is_active' => false
            ]);
            return redirect()->route('administrador.index')
            ->with('status', 'La publicacion ha sido ocultada correctamente');
        }else {
            $publicacion->update([
                'is_active' => true
            ]);
            return redirect()->route('administrador.index')
            ->with('status', 'La publicacion ha sido republicada correctamente');
        }



    }
    
    // public function restore($id){
    //     $publicacion = Publicacion::find($id);
    //     $publicacion->update([
    //         'is_active' => true
    //     ]);
    //     return redirect()->route('administrador.index');
    // }
    
    public function store(Request $request)
    {


        $rules = $this->getRules();
        $messages = $this->getMessages();

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
            ->route('administrador.create')
            ->withErrors($validator)
            ->withInput();
        }

        $imagen_nombre = time().$request->file('imagen')->getClientOriginalName();
        $ruta_imagen = $request->file('imagen')->storeAs('publicacion', $imagen_nombre, 'public');

        Publicacion::create([
            'nombre' => $request->nombre,
            'precio' => $request->precio,
            'huespedes' => $request->huespedes,
            'superficie' => $request->superficie,
            'imagen' =>  $ruta_imagen,
            'descripcion' => $request->descripcion,
        ]);
        return redirect()->route('administrador.index')
        ->with('status', 'La publicacion ha sido agregada correctamente');

    }


    private function getRules(){
        return [
            'nombre' => 'required | max:30',
            'precio' => 'required | numeric | max:999999',
            'huespedes' => 'required | numeric | max:10',
            'superficie' => 'required | numeric | max:300',
            'descripcion' => 'required | max:80',
            'imagen' => 'required | mimes:jpg,jpeg,png,bmp',
        ];
    }
    private function getMessages(){
        return [
            'required' => 'El campo :attribute es obligatorio',
            'numeric' => 'El campo :attribute tiene que ser un numero',
            'nombre.required' => 'Debe ingresar el nombre de la publicacion'

        ];
    }
}
