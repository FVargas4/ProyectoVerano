<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstruccionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("instruccion_users")->insert([
            //id,rol,descripcion, created_at(N), updated_at(N)
            [
                "user_id" => "1",
                "instruccion_id" => "1",
            ],  
        ]);
    }
}
