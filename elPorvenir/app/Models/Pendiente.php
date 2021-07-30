<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendiente extends Model
{
    use HasFactory;

    public static function getPendientes($ids) {
        //dd($ids);
        $aux = array();
        foreach ($ids as $item) {
            $id = $item -> pendiente_id;
            array_push($aux, $id);
        }
        $result = array();
        foreach ($aux as $item){
            $pendiente = Pendiente::findOrFail($item);
            array_push($result, $pendiente);
        }
        return($result);
    }
}
