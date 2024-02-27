<?php

namespace App\Http\Controllers;

use App\Models\Policia;
use Illuminate\Http\Request;

class PoliciaController extends Controller
{
    public function index()
    {
        $policia = Policia::all();
        return response()->json(['policia' => $policia], 200);
    }

    public function store(Request $request)
    {
        $policia = Policia::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'cedula' => $request->cedula,
            'rango' => $request->rango,
        ]);

        return response()->json([
            'message' => 'Dato creado correctamente',
            'policia' => $policia
        ], 201);
    }
}
