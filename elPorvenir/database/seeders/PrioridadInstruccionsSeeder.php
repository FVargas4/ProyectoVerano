<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioridadInstruccionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("prioridad_instruccions")->insert([
            //id,rol,descripcion, created_at(N), updated_at(N)
            [
                "prioridad_id" => "1",
                "instruccion_id" => "1",
            ],  
        ]);
    }
}
