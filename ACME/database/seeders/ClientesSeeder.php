<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            'cliente_id'=>2,
            'direccion'=>"19 y morelos barrio del seguro",
            'RFC'=>"GFA23FHJ7U",
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('clientes')->insert([
            'cliente_id'=>4,
            'direccion'=>"19 y morelos barrio del seguro",
            'RFC'=>"VJ,VDW69G54",
            "created_at"=>date("Y-m-d h:m:s")
        ]);
    }
}
