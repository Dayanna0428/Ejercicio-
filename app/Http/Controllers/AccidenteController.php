<?php

namespace App\Http\Controllers;
use App\Models\Accidente;
use Illuminate\Http\Request;



class AccidenteController extends Controller
{
    public function index()
    {
        $accidentes = Accidente::all();
        return view('accidentes.index', compact('accidentes'));
    }

    public function create()
    {
        return view('accidentes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hora' => 'required',
            'codigo' => 'required',
            'fecha' => 'required|date',
            'lugar' => 'required|max:255',
        ]);

        Accidente::create($request->all());

        return redirect()->route('accidentes.index')->with('success', 'Accidente creado exitosamente.');
    }

    public function show(Accidente $accidente)
    {
        return view('accidentes.show', compact('accidente'));
    }

    public function edit(Accidente $accidente)
    {
        return view('accidentes.edit', compact('accidente'));
    }

    public function update(Request $request, Accidente $accidente)
    {
        $request->validate([
            'hora' => 'required',
            'codigo' => 'required',
            'fecha' => 'required|date',
            'lugar' => 'required|max:255',
        ]);

        $accidente->update($request->all());

        return redirect()->route('accidentes.index')->with('success', 'Accidente actualizado exitosamente.');
    }

    public function destroy(Accidente $accidente)
    {
        $accidente->delete();

        return redirect()->route('accidentes.index')->with('success', 'Accidente eliminado exitosamente.');
    }
}

