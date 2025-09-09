<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zonas')->insert([
            'nombre'=>"Norte",
            'descripcion'=>"Zona rocosa",
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('zonas')->insert([
            'nombre'=>"Sur",
            'descripcion'=>"Zona desertica",
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('zonas')->insert([
            'nombre'=>"Oeste",
            'descripcion'=>"Zona forestal",
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('zonas')->insert([
            'nombre'=>"Este",
            'descripcion'=>"Zona gelida",
            "created_at"=>date("Y-m-d h:m:s")
        ]);
    }
}
