<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','persona.index');

        $personas = Persona::orderBy('id','Asc')->paginate(100);

        return view('persona.index',compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','persona.create');

        return view('persona.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','persona.create');

        $request->validate([
            'id'                => 'required|unique:personas,id',
            'nombrePersona'     => 'required|max:30',
            'apeUnoPersona'     => 'required|max:30',
            'apeDosPersona'     => 'required|max:30',
            'generoPersona'     => 'required',
            'semestrePersona'   => 'required|numeric',
            'grupoPersona'      => 'required',
            'statusPersona'     => 'required',
        ]);

        $personas = Persona::create($request->all());

        return redirect()->route('persona.index')
            ->with('status_success','Estudiantes guardado satisfactorimente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        $this->authorize('haveaccess','persona.show');

        return view('persona.view', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        $this->authorize('haveaccess','persona.edit');

        return view('persona.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $this->authorize('haveaccess','persona.edit');

        $request->validate([
            'id'                => 'required|unique:personas,id,'.$persona->id,
            'nombrePersona'     => 'required|max:30',
            'apeUnoPersona'     => 'required|max:30',
            'apeDosPersona'     => 'required|max:30',
            'generoPersona'     => 'required',
            'semestrePersona'   => 'required|numeric',
            'grupoPersona'      => 'required',
            'statusPersona'     => 'required',
        ]);

        $persona -> update($request->all());

        return redirect()->route('persona.index')
            ->with('status_success','Person updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $this->authorize('haveaccess','persona.destroy');

        $persona->delete();

        return redirect()->route('persona.index')
            ->with('status_success','Person successfully removed');
    }
}
