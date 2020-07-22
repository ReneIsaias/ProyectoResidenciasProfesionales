<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Proyect_User;
use App\User;
use App\Proyect;
use App\Situationproyect;

class ProyectUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','calificar.index');

        $calificars = Proyect_User::with('proyects','users')->orderBy('id','Desc')->paginate(10);

        return view('calificar.index',compact('calificars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','calificar.create');

        $proyects = Proyect::where('statusProject',1)->get();
        $users = User::where('statusUser',1)->get();

        return view('calificar.create',compact('proyects','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','calificar.create');

        $request->validate([
            'calification'              => 'required|numeric|max:100|min:0',
            'descriptionCalification'   => 'required|max:200',
            'proyect_id'                => 'required',
            'user_id'                   => 'required',
        ]);

        /* return $request->all(); */
        $calificar = Proyect_User::create($request->all());

        return redirect()->route('calificar.index')
            ->with('status_success','Calificacion asignada satisfactorimente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proyect_User $calificar)
    {
        $this->authorize('haveaccess','calificar.show');

        $users = User::orderBy('name')->get();
        $proyects = Proyect::orderBy('nameProyect')->get();

        return view('calificar.view', compact('calificar','users','proyects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyect_User $calificar)
    {
        $this->authorize('haveaccess','calificar.edit');

        $users = User::orderBy('name')->get();
        $proyects = Proyect::orderBy('nameProyect')->get();

        return view('calificar.edit', compact('calificar','users','proyects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyect_User $calificar)
    {
        $this->authorize('haveaccess','calificar.edit');

        $request->validate([
            'calification'              => 'required|numeric|max:100|min:0',
            'descriptionCalification'   => 'required|max:200',
            'proyect_id'                => 'required',
            'user_id'                   => 'required',
        ]);

        $calificar -> update($request->all());

        return redirect()->route('calificar.index')
            ->with('status_success','Calificacion asignada satisfactorimanete');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyect_User $calificar)
    {
        $this->authorize('haveaccess','calificar.destroy');

        $calificar->delete();

        return redirect()->route('calificar.index')
            ->with('status_success','Calificacion eliminada satisfactorimante');
    }
}
