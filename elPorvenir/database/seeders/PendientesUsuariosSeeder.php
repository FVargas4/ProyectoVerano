<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PendientesUsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("pendientes_users")->insert([
            //id,rol,descripcion, created_at(N), updated_at(N)
            [
                "pendiente_id" => "1",
                "user_id" => "1",
            ],  
        ]);
    }
}
