<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\informe_probatorio;

class Informe_probatorioController extends Controller
{
        public function guardar(Request $request)
{
    $id_probatorio = $request->input('probatorio');
    $id_informe = $request->input('id_indica');
    
        $informe = new Informe_probatorio();
        $informe->probatorio_id = $id_probatorio;
        $informe->informe_id = $id_informe;
        $informe->save();
    return redirect()->back()->with('success', 'Respuestas guardadas correctamente.');
}
}
