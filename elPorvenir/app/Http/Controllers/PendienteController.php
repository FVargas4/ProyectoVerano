<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendiente;

class PendienteController extends Controller
{
    public function index(){
        return view('pendientes.index');
    }
}
