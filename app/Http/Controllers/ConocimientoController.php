<?php

namespace App\Http\Controllers;

use App\Models\Conocimiento;
use App\Models\Persona;
use Illuminate\Http\Request;

class ConocimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conocimientos = Conocimiento::all();
        $personas = Persona::all();
        return view('conocimientos.index', ['conocimientos' => $conocimientos, 'personas' => $personas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:1',
            'nivel' => 'required|min:3',
            'persona_id' => 'required|min:1',
        ]);

        $conocimiento = new Conocimiento;
        $conocimiento->nombre = $request->nombre;
        $conocimiento->nivel = $request->nivel;
        $conocimiento->persona_id = $request->persona_id;
        $conocimiento->save();

        return redirect()->route('conocimientos.index')->with('success', 'Conocimiento creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conocimiento = Conocimiento::find($id);
        $personas = Persona::all();
        return view('conocimientos.show', ['conocimiento' => $conocimiento, 'personas' => $personas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|min:1',
            'nivel' => 'required|min:3',
            'persona_id' => 'required|min:1',
        ]);

        $conocimiento = Conocimiento::find($id);
        $conocimiento->nombre = $request->nombre;
        $conocimiento->nivel = $request->nivel;
        $conocimiento->persona_id = $request->persona_id;
        $conocimiento->save();

        return redirect()->route('conocimientos.index')->with('success', 'Conocimiento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conocimiento = Conocimiento::find($id);
        $conocimiento->delete();
        return redirect()->route('conocimientos.index')->with('success','El conocimiento ha sido eliminado!');
    }
}
