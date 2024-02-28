<?php

namespace App\Http\Controllers;

use App\Models\Inscrito;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InscritoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index()
    {
        $inscritos = Inscrito::where('estado_inscripcion', 1)->get();
        return view('inscritos.index', ['inscritos' => $inscritos]);
    }

    public function show($id)
    {
        $inscrito = Inscrito::findOrFail($id);

        return view('inscritos.detail', compact('inscrito'));
    }

    public function desinscribir(Request $request, Inscrito $preinscrito)
    {
        // Invierte el valor del campo 'estado_inscripcion'
        $preinscrito->update([
            'estado_inscripcion' => 0,
        ]);
        $inscritos = Inscrito::where('estado_inscripcion', 1)->get();
        return view('inscritos.index')->with('success', '¡Usuario desinscrito correctamente!')->with('inscritos', $inscritos);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $response):JsonResponse
    {
        $image = $response->file('file');
        $imageName = time().'.'.$image->extension();
        $image->move(public_path('uploads/soportes'), $imageName);
        return response()->json(['success'=>$imageName]);
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inscrito $inscrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inscrito $inscrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inscrito $inscrito)
    {
        //
    }
}
