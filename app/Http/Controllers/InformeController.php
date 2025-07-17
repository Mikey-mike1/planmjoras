<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informe;


class InformeController extends Controller
{
    public function mostrar(){
    $informes = Informe::with('probatorios')->get();
        return view('informe', compact('informes'));
    }

    public function guardar(Request $request)
{
    //Recibo id como el número de identificador del input hidden y la respuesta tiene de nombre el ID que representa
    $id = $request->input('identificador');
    $respuesta = $request->input($id);
    


        $informe = Informe::find($id);
        $informe->respuesta = $respuesta;
    $informe->save();
    return redirect()->back()->with('success', 'Respuestas guardadas correctamente.');
}

}