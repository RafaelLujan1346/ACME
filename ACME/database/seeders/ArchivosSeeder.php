<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArchivosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pdfs')->insert([
            'nombre_archivo'=>"pdf1",
            'ruta_archivo'=>"si",
            'version'=>1,
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('pdfs')->insert([
            'nombre_archivo'=>"pdf2",
            'ruta_archivo'=>"no",
            'version'=>2,
            "created_at"=>date("Y-m-d h:m:s")
        ]);
    }
}
