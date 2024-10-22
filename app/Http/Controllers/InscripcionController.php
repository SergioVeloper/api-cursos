<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscripcion;

class InscripcionController extends Controller
{
    public function index()
    {
        $inscripcion = Inscripcion::all();
        return response()->json($inscripcion, 200);
    }

    public function store(Request $request)
    {
        $inscripcion = Inscripcion::create($request->all());
        return response()->json($inscripcion, 201);
    }

    public function show($id)
    {
        $inscripcion = Inscripcion::find($id);
        if($inscripcion == null){
            return response()->json(['message' => 'Inscripcion no encontrada'], 404);
        }
        return response()->json($inscripcion, 200);
    }
    
    public function update(Request $request, $id)
    {
        $inscripcion = Inscripcion::find($id);
        if($inscripcion == null){
            return response()->json(['message' => 'Inscripcion no encontrada'], 404);
        }
        $inscripcion->update($request->all());
        return response()->json($inscripcion, 200);
    }

    public function destroy($id)
    {
        $inscripcion = Inscripcion::find($id);
        if($inscripcion == null){
            return response()->json(['message' => 'Inscripcion no encontrada'], 404);
        }
        $inscripcion->delete();
        return response()->json(['message' => 'Inscripcion eliminada'], 200);
    }
}
