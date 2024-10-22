<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $curso = Curso::all();
        return response()->json($curso, 200);
    }

    public function store(Request $request)
    {
        $curso = Curso::create($request->all());
        return response()->json($curso, 201);
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        if($curso == null){
            return response()->json(['message' => 'Curso no encontrado'], 404);
        }
        return response()->json($curso, 200);
    }
    
    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);
        if($curso == null){
            return response()->json(['message' => 'Curso no encontrado'], 404);
        }
        $curso->update($request->all());
        return response()->json($curso, 200);
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);
        if($curso == null){
            return response()->json(['message' => 'Curso no encontrado'], 404);
        }
        $curso->delete();
        return response()->json(['message' => 'Curso eliminado'], 200);
    }
    
}
