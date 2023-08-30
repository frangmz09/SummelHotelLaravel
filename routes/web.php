<?php

use App\Http\Controllers\PublicacionAdminController;
use Illuminate\Support\Facades\Route;

use App\Models\Habitacion;
use App\Models\Publicacion;

use App\Http\Controllers\PublicacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('instalaciones', function () {
    return view('instalaciones');
})->name('instalaciones');

Route::get('ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');


Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');
Route::get('contacto', function () {
    return view('contacto');
})->name('contacto');


Route::get('publicaciones', [
    PublicacionController::class,'index'
])->name('publicaciones.index');

Route::get('publicaciones/{publicacion}', [
    PublicacionController::class,'show'
])->name('publicaciones.show');

Route::resource('administrador', PublicacionAdminController::class);

Route::group(['middleware'=>['isAdmin']], function(){
    Route::resource('administrador', PublicacionAdminController::class);
} );

// Route::put('administrador.restore'. [
//     PublicacionAdminController::class,'restore'
// ])->name('administrador.restore');

Route::get('test/{nombre?}', function ($nombre='Desconocido') {
    Publicacion::create([
        'nombre'=> 'Domo',
        'descripcion'=> 'Habitacion para dos',
        'precio'=> '800',
        'huespedes'=> '2',
        'superficie'=> '50',
        'imagen'=> 'Domo re piola',
    ]);
    return "Se creo la habitacion correctamente";
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');