<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();

        return view('personas.index', ['personas' => $personas]);
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
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'fecha_nacimiento' => 'required|max:255',
            'celular' => 'required|max:255',
            'correo' => 'required|max:255',
            'presentacion_principal' => 'required|max:255',
            'presentacion_secundaria' => 'required|max:255',
        ]);

        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->celular = $request->celular;
        $persona->correo = $request->correo;
        $persona->presentacion_principal = $request->presentacion_principal;
        $persona->presentacion_secundaria = $request->presentacion_secundaria;
        $persona->save();

        return redirect()->route('personas.index')->with('success', 'Nueva persona agregada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        return view('personas.show', ['persona' => $persona]);
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
        $persona = Persona::find($id);
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
        $persona->celular = $request->celular;
        $persona->correo = $request->correo;
        $persona->presentacion_principal = $request->presentacion_principal;
        $persona->presentacion_secundaria = $request->presentacion_secundaria;
        $persona->save();

        return redirect()->route('personas.index')->with('success', 'Persona actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->conocimientos()->each(function($conocimiento){
            $conocimiento->delete();
        });
        $persona->trabajos()->each(function($trabajo){
            $trabajo->delete();
        });
        $persona->educacions()->each(function($educacion){
            $educacion->delete();
        });
        $persona->proyectos()->each(function($proyecto){
            $proyecto->delete();
        });
        $persona->delete();

        return redirect()->route('personas.index')->with('success', 'Persona eliminada!');
    }
}
