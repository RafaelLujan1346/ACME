<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planos')->insert([
            'direccion'=>"pipila indutrial",
            'modulo'=>"Modulo 1",
            'zona_id'=>"1",
            'numero_plano'=>'1',
            'pdf_id'=>'1',
            'proyecto_id'=>'1',
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('planos')->insert([
            'direccion'=>"Nogales",
            'modulo'=>"Modulo 2",
            'zona_id'=>"2",
            'numero_plano'=>'2',
            'pdf_id'=>'2',
            'proyecto_id'=>'2',
            "created_at"=>date("Y-m-d h:m:s")
        ]);
    }
}
