<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensajes;

class MensajesController extends Controller
{
    public function index() {
        return response()->json(Mensajes::all(), 200);
    }

    public function store(Request $request) {
        $mensaje = new Mensajes(); 
        $mensaje->mensaje = $request->mensaje;
        $mensaje->usuario = $request->usuario;
        $mensaje->save();

        return response()->json($mensaje, 200);
}
}

