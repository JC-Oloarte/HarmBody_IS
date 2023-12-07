<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cambiarUserId(Request $request)
    {
        $nuevoUserId = $request->input('nuevo_user_id');
        // Validar que $nuevoUserId sea numérico si es necesario

        // Modificar el valor de user_id
        view()->share('user_id', $nuevoUserId);

        return redirect()->back(); // Redirigir a la página anterior (puedes cambiar esto según tus necesidades)
    }
}