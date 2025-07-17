<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informe;

class ImprimirController extends Controller
{
    public function mostrar(){
    $informes = Informe::with('probatorios')->get();
        return view('imprimir', compact('informes'));
    }
}