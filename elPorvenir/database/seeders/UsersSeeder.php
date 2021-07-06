<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("users")->insert([
            //id,rol,descripcion, created_at(N), updated_at(N)
            [
                "id" => "1",
                "name" => "Fernando Vargas Diaz",
                "email" => "grupoalfa@correo.com",
                "telefono" => "4432021735",
                "password" => Hash::make("admin"),

            ],  
            [
                "id" => "2",
                "name" => "Fernando Vargas Alvarez",
                "email" => "fer@correo.com",
                "telefono" => "4433576291",
                "password" => Hash::make("contraseña"),
            ], 
            [
                "id" => "3",
                "name" => "Leonardo Vargas Alvarez",
                "email" => "leo@correo.com",
                "telefono" => "4433576291",
                "password" => Hash::make("dinosaurio"),
            ], 
        ]);
    }
}
