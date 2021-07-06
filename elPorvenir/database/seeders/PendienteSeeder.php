<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PendienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("pendientes")->insert([
            //id,rol,descripcion, created_at(N), updated_at(N)
            [
                "id" => "1",
                "nombre" => "Pendiente de prueba",
                "fecha_entrega" => "2021-07-01",
                "fecha_vencimiento" => "2021-10-01",
                "descripcion" => "Este es un pendiente de prueba para corroborar el fucionamiento del caso de uso",

            ],
        ]);
    }
}
