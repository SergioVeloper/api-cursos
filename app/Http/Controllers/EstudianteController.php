<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiante = Estudiante::all();
        return response()->json($estudiante, 200);
    }

    public function store(Request $request)
    {
        $estudiante = Estudiante::create($request->all());
        return response()->json($estudiante, 201);
    }

    public function show($id)
    {
        $estudiante = Estudiante::find($id);
        if($estudiante == null){
            return response()->json(['message' => 'Estudiante no encontrado'], 404);
        }
        return response()->json($estudiante, 200);
    }
    
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);
        if($estudiante == null){
            return response()->json(['message' => 'Estudiante no encontrado'], 404);
        }
        $estudiante->update($request->all());
        return response()->json($estudiante, 200);
    }

    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        if($estudiante == null){
            return response()->json(['message' => 'Estudiante no encontrado'], 404);
        }
        $estudiante->delete();
        return response()->json(['message' => 'Estudiante eliminado'], 200);
    }
}
