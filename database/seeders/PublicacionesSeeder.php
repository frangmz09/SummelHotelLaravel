<?php

namespace Database\Seeders;

use App\Models\Publicacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PublicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Publicacion::create([
            'nombre' => 'Mountain View',
            'precio' => '10000',
            'huespedes' => '4',
            'superficie' => '40',
            'imagen' => 'publicacion/habitacionmv.png',
            'descripcion' => 'Una cama King, Una cama extra o una cuna. Tres adultos o dos adultos, un niño/a',
        ]);
        Publicacion::create([
            'nombre' => 'Suite',
            'precio' => '20000',
            'huespedes' => '4',
            'superficie' => '45',
            'imagen' => 'publicacion/habitacions.png',
            'descripcion' => 'Una cama King, Un sillón. Tres adultos o dos adultos, dos niños',
        ]);
        Publicacion::create([
            'nombre' => 'City View',
            'precio' => '20000',
            'huespedes' => '2',
            'superficie' => '35',
            'imagen' => 'publicacion/habitacioncv.png',
            'descripcion' => 'Una cama Matrimonial, Dos adultos',
        ]);
        Publicacion::create([
            'nombre' => 'Domo',
            'precio' => '40000',
            'huespedes' => '2',
            'superficie' => '15',
            'imagen' => 'publicacion/habitaciondm.png',
            'descripcion' => 'Una cama, Dos adultos',
        ]);

        Publicacion::factory(50)->create();
    }
}
