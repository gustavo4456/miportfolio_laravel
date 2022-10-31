<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        $personas = Persona::all();
        return view('proyectos.index', ['proyectos' => $proyectos, 'personas' => $personas]);
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
            'fecha_inicio' => 'required|min:3',
            'fecha_fin' => 'required|min:3',
            'descripcion' => 'required|min:3',
            'lenguaje' => 'required|min:3',
            'imagen' => 'required|min:3',
            'url_github' => 'required|min:3',
            'persona_id' => 'required|min:1',
        ]);

        $proyecto = new Proyecto;
        $proyecto->nombre = $request->nombre;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->lenguaje = $request->lenguaje;
        $proyecto->imagen = $request->imagen;
        $proyecto->url_github = $request->url_github;
        $proyecto->persona_id = $request->persona_id;
        $proyecto->save();

        return redirect()->route('proyectos.index')->with('success', 'Proyecto creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        $personas = Persona::all();
        return view('proyectos.show', ['proyecto' => $proyecto, 'personas' => $personas]);
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
            'fecha_inicio' => 'required|min:3',
            'fecha_fin' => 'required|min:3',
            'descripcion' => 'required|min:3',
            'lenguaje' => 'required|min:3',
            'imagen' => 'required|min:3',
            'url_github' => 'required|min:3',
            'persona_id' => 'required|min:1',
        ]);

        $proyecto = Proyecto::find($id);
        $proyecto->nombre = $request->nombre;
        $proyecto->fecha_inicio = $request->fecha_inicio;
        $proyecto->fecha_fin = $request->fecha_fin;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->lenguaje = $request->lenguaje;
        $proyecto->imagen = $request->imagen;
        $proyecto->url_github = $request->url_github;
        $proyecto->persona_id = $request->persona_id;
        $proyecto->save();

        return redirect()->route('proyectos.index')->with('success', 'proyecto actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        $proyecto->delete();
        return redirect()->route('proyectos.index')->with('success','El proyecto ha sido eliminado!');
    }
}
