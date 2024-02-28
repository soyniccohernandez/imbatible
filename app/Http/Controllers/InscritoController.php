<?php

namespace App\Http\Controllers;

use App\Models\Inscrito;
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
