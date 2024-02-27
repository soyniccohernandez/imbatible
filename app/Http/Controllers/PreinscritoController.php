<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscrito;

class PreinscritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inscritos = Inscrito::where('estado_inscripcion', 0)->get();
        return view('preinscritos.index', ['inscritos' => $inscritos]);
    }

    public function updateEstadoInscripcion(Request $request, Inscrito $preinscrito)
    {
        // Invierte el valor del campo 'estado_inscripcion'
        $preinscrito->update([
            'estado_inscripcion' => !$preinscrito->estado_inscripcion,
        ]);
        $inscritos = Inscrito::all();
        return view('preinscritos.index')->with('success', '¡Usuario inscrito correctamente!')->with('inscritos', $inscritos);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $preinscrito = Inscrito::findOrFail($id);

        return view('preinscritos.detail', compact('preinscrito'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
