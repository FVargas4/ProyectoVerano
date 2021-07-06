<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PrioridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("prioridads")->insert([
            //id,rol,descripcion, created_at(N), updated_at(N)
            [
                "id" => "1",
                "nombre" => "Alta",
            ],  
            [
                "id" => "2",
                "nombre" => "Media",
            ], 
            [
                "id" => "3",
                "nombre" => "Baja",
            ], 
        ]);
    }
}
