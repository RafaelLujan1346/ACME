<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArquitectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('arquitectos')->insert([
            'arquitecto_id'=>1,
            'direccion'=>"19 y morelos barrio del seguro",
            'cedula'=>"dadshja",
            'especialidad'=>'arquitecto',
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('arquitectos')->insert([
            'arquitecto_id'=>3,
            'direccion'=>"19 y morelos barrio del seguro",
            'cedula'=>"wertyuhja",
            'especialidad'=>'chalan',
            "created_at"=>date("Y-m-d h:m:s")
        ]);
    }
}
