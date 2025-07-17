<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\probatorio;
use App\Models\Informe;

class ProbatorioController extends Controller
{
        public function mostrar(){
        $probat = probatorio::all();
        $indica = informe::all();
        return view('probatorios',compact('probat', 'indica'));
    }

        public function guardar(Request $request)
    {
        
        $request->validate([
            'codigo' => 'required|string|max:100',
            'nombre' => 'required|string|max:255',
            'pdf'    => 'required|mimes:pdf|max:10240', 
        ]);

        $codigo = preg_replace('/[^A-Za-z0-9_\-]/', '_', $request->codigo);
        $nombre = preg_replace('/[^A-Za-z0-9_\-]/', '_', $request->nombre);
        $nombreArchivo = $codigo . '-' . $nombre . '.pdf';
        $ruta = $request->file('pdf')->storeAs('pdfs', $nombreArchivo, 'public');

        
        probatorio::create([
            'codigo' => $request->codigo,
            'nombre' => $request->nombre,
            'enlace' => $ruta,
        ]);

        return back()->with('success', 'Datos guardados correctamente.');
    }
}