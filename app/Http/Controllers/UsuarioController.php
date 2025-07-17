<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function perfil()
{
    $id = Auth::id(); 
    $usuario = User::findOrFail($id); 
    return view('cuenta', compact('usuario'));
}
}
