<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>"Gabriel",
            'ap'=>"Garcia",
            'am'=>"Torres",
            'email'=>'gabriel22GGT@gmai.com',
            'password'=>'RLIas836g1',
            'foto'=>'default.jpg',
            'tipoUsuario'=>'arqui',
            'numero'=>'1234567890',
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('users')->insert([
            'name'=>"Eunice",
            'ap'=>"tarelo",
            'am'=>"palma",
            'email'=>'asjdbkjabsd@gmai.com',
            'password'=>'dbay8d3d93d',
            'foto'=>'default.jpg',
            'tipoUsuario'=>'cliente',
            'numero'=>'735910340',
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('users')->insert([
            'name'=>"Juan",
            'ap'=>"Grijalva",
            'am'=>"Torres",
            'email'=>'jdaiofia@gmai.com',
            'password'=>'auidhaidas',
            'foto'=>'default.jpg',
            'tipoUsuario'=>'cliente',
            'numero'=>'0165263784',
            "created_at"=>date("Y-m-d h:m:s")
        ]);
        DB::table('users')->insert([
            'name'=>"Gustabo",
            'ap'=>"Chacon",
            'am'=>"Arreola",
            'email'=>'dahsjdlk@gmai.com',
            'password'=>'yd8a7shia933',
            'foto'=>'default.jpg',
            'tipoUsuario'=>'cliente',
            'numero'=>'1234567890',
            "created_at"=>date("Y-m-d h:m:s")
        ]);
    }
}
