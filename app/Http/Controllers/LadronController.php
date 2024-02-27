<?php

namespace App\Http\Controllers;

use App\Models\Ladron;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LadronController extends Controller
{
    public function index()
    {
        $ladron = DB::table('ladron')
            ->join('policia', 'policia.id', '=', 'ladron.id_policia')
            ->select('ladron.*', 'policia.nombre as policia')
            ->get();
        return response()->json(['ladron' => $ladron], 200);
    }

    public function store(Request $request)
    {
        $ladron = Ladron::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'cedula' => $request->cedula,
            'delito' => $request->delito,
            'id_policia' => $request-> id_policia,
        ]);

        return response()->json([
            'message' => 'Dato creado correctamente',
            'ladron' => $ladron
        ], 201);
    }
}
