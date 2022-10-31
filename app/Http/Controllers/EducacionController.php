<?php

namespace App\Http\Controllers;

use App\Models\Educacion;
use App\Models\Persona;
use Illuminate\Http\Request;

class EducacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educacions = Educacion::all();
        $personas = Persona::all();

        return view('educacions.index', ['educacions' => $educacions, 'personas' => $personas]);
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
            'institucion' => 'required|min:1',
            'nivel' => 'required|min:3',
            'estado' => 'required|min:3',
            'descripcion' => 'required|min:3',
            'persona_id' => 'required|min:1',
        ]);

        $educacion = new Educacion();
        $educacion->institucion = $request->institucion;
        $educacion->nivel = $request->nivel;
        $educacion->estado = $request->estado;
        $educacion->descripcion = $request->descripcion;
        $educacion->persona_id = $request->persona_id;

        $educacion->save();

        return redirect()->route('educacions.index')->with('success', 'Educacion creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $educacion = Educacion::find($id);
        $personas = Persona::all();
        return view('educacions.show', ['educacion' => $educacion, 'personas' => $personas]);
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
            'institucion' => 'required|min:1',
            'nivel' => 'required|min:3',
            'estado' => 'required|min:3',
            'descripcion' => 'required|min:3',
            'persona_id' => 'required|min:1',
        ]);

        $educacion = Educacion::find($id);
        $educacion->institucion = $request->institucion;
        $educacion->nivel = $request->nivel;
        $educacion->estado = $request->estado;
        $educacion->descripcion = $request->descripcion;
        $educacion->persona_id = $request->persona_id;

        $educacion->save();

        return redirect()->route('educacions.index')->with('success', 'Educacion actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $educacion = Educacion::find($id);
        $educacion->delete();
        return redirect()->route('educacions.index')->with('success','La educacion ha sido eliminado!');
    }
}
