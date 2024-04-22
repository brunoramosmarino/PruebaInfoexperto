<?php

namespace App\Http\Controllers\PruebaController;

use App\Models\User;
use Illuminate\Http\Request;

class MostrarUsuarios
{
    public static function ejecutar(Request $request)
    {
        $usuarios = User::all();
        return $usuarios;
    }
}