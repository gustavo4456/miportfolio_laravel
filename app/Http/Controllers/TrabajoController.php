<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Trabajo;
use Illuminate\Http\Request;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajos = Trabajo::all();
        $personas = Persona::all();
        return view('trabajos.index', ['trabajos' => $trabajos, 'personas' => $personas]);
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
            'tipo' => 'required|min:1',
            'ocupacion' => 'required|min:3',
            'fecha_inicio' => 'required|min:1',
            'fecha_fin' => 'required|min:1',
            'descripcion' => 'required|min:1',
            'persona_id' => 'required|min:1',
        ]);

        $trabajo = new Trabajo;
        $trabajo->tipo = $request->tipo;
        $trabajo->ocupacion = $request->ocupacion;
        $trabajo->fecha_inicio = $request->fecha_inicio;
        $trabajo->fecha_fin = $request->fecha_fin;
        $trabajo->descripcion = $request->descripcion;
        $trabajo->persona_id = $request->persona_id;
        $trabajo->save();

        return redirect()->route('trabajos.index')->with('success', 'Trabajo creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trabajo = Trabajo::find($id);
        $personas = Persona::all();
        return view('trabajos.show', ['trabajo' => $trabajo, 'personas' => $personas]);
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
            'tipo' => 'required|min:1',
            'ocupacion' => 'required|min:3',
            'fecha_inicio' => 'required|min:1',
            'fecha_fin' => 'required|min:1',
            'descripcion' => 'required|min:1',
            'persona_id' => 'required|min:1',
        ]);

        $trabajo = Trabajo::find($id);
        $trabajo->tipo = $request->tipo;
        $trabajo->ocupacion = $request->ocupacion;
        $trabajo->fecha_inicio = $request->fecha_inicio;
        $trabajo->fecha_fin = $request->fecha_fin;
        $trabajo->descripcion = $request->descripcion;
        $trabajo->persona_id = $request->persona_id;
        $trabajo->save();

        return redirect()->route('trabajos.index')->with('success', 'Trabajo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trabajo = Trabajo::find($id);
        $trabajo->delete();
        return redirect()->route('trabajos.index')->with('success','El trabajo ha sido eliminado!');
    }
}
