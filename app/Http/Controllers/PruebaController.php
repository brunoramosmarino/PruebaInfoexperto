<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PruebaController\MostrarUsuarios;
use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function mostrarUsuarios(Request $request)
    {
        $helper = MostrarUsuarios::ejecutar($request);
        return $helper;
    }
}
