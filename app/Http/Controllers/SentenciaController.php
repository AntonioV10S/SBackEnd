<?php

namespace App\Http\Controllers;

use App\Models\Sentencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SentenciaController extends Controller
{
    public function index()
    {
        $sentencia = DB::table('sentencia')
            ->join('ladron', 'ladron.id', '=', 'sentencia.id_ladron')
            ->select('sentencia.*', 'ladron.nombre')
            ->get();
        return response()->json(['sentencia' => $sentencia], 200);
    }

    public function store(Request $request)
    {
        $sentencia = Sentencia::create([
            'condena' => $request->condena,
            'multa' => $request->multa,
            'id_ladron' => $request->id_ladron,
        ]);

        return response()->json([
            'message' => 'Dato creado correctamente',
            'sentencia' => $sentencia
        ], 201);
    }
}
