<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listado_animales = Animal::all();


        return response()->json($listado_animales, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $animal = new Animal();
        $animal->nombre = $request->nombre;
        $animal->numero_patas = $request->numero_patas;
        $animal->altura_maxima = $request->altura_maxima;
        $animal->save();
        return response()->json($animal, 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $animales = Animal::find($id);
        return response()->json($animales, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $animales = Animal::find($id);
        $animales->nombre = $request->nombre;
        $animales->numero_patas = $request->numero_patas;
        $animales->altura_maxima = $request->altura_maxima;
        $animales->save();
        return response()->json($animales, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $animales = Animal::find($id);
        $animales->delete();
        return response()->json($animales, 200);
    }
}
