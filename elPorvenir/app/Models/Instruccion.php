<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruccion extends Model
{
    use HasFactory;

    public static function getInstrucciones($ids) {
        //dd($ids);
        $aux = array();
        foreach ($ids as $item) {
            $id = $item -> instruccion_id;
            array_push($aux, $id);
        }
        $result = array();
        foreach ($aux as $item){
            $instruccion = Instruccion::findOrFail($item);
            array_push($result, $instruccion);
        }
        return($result);
    }
}
