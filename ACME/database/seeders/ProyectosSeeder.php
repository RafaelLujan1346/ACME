<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proyectos')->insert([
            'nombre_proyecto'=>"Restaurante patty",
            'descripcion'=>"Restaurante de comida casera y desayunos patty",
            'cliente_id'=>1,
            'arquitecto_id'=>1,
            'zonas_id'=>1,
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('proyectos')->insert([
            'nombre_proyecto'=>"Restaurante Glamour Livanense",
            'descripcion'=>"Restaurante de comida italiana",
            'cliente_id'=>2,
            'arquitecto_id'=>2,
            'zonas_id'=>2,
            "created_at"=>date("Y-m-d h:m:s")
        ]);
    }
}
