<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    public function login(Request $request) {
    
        $username = $request->input('username');
        $password = $request->input('password');

        $usuario = Usuarios::where('username', $username)
                    ->where('password', $password)
                    ->first();

        if ($usuario) {
            return response()->json($usuario, 200);
        } else {
            return response()->json(['error' => 'Datos incorrectos'], 401);
        }
    }

    public function getUsuario($id) {
        $usuario = Usuarios::find($id);

        if(!$usuario) {
            return response() -> json(404);
        }

        return response() -> json(
            $usuario, 200);
    }
}

