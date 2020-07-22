<?php

namespace App\Http\Controllers;

use App\Busines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Titular;
use App\User;
use App\Covenant;
use App\Turn;
use App\Sector;
use App\Post;

class BusinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','busines.index');

        $business = Busines::with('titular','user','covenant','turn','sector')->orderBy('id','Desc')->paginate(10);

        return view('busines.index',compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','busines.create');

        $titulars = Titular::where('statusTitular',1)->orderBy('id','Desc')->get();
        $users = User::where('statusUser',1)->get();
        $covenants = Covenant::where('statusConvenant',1)->get();
        $turns = Turn::where('statusTurn',1)->get();
        $sectors = Sector::where('statusSector',1)->get();
        $posts = Post::orderBy('namePost')->get();

        return view('busines.create',compact('titulars','users','covenants','turns','sectors','posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','busines.create');

        $request->validate([
            'rfcBusiness'      => 'required|min:8|max:50',
            'nameBusiness'     => 'required|min:2|max:200',
            'emailBusiness'    => 'required|min:2|max:100|email',
            'misionBusiness'   => 'required|min:5',
            'directionBusiness'=> 'required|min:5',
            'coloniaBusiness'  => 'required|min:5',
            'cityBusiness'     => 'required|min:2|max:100',
            'phoneBusiness'    => 'required|min:2|numeric',
            'cpBusiness'       => 'required|min:4|numeric',
            'personFirma'      => 'required|min:4|max:100',
            'postPerson'       => 'required|min:2|max:100',
            'statusBusines'    => 'required',
            'titulars_id'      => 'required',
            'user_id'          => '',
            'covenants_id'     => 'required',
            'turns_id'         => 'required',
            'sectors_id'       => 'required',
        ]);
        $busines = Busines::create($request->all());

        return redirect()->route('proyect.create')
            ->with('status_success','Empresa registrada satisfactoriamente ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Busines  $busines
     * @return \Illuminate\Http\Response
     */
    public function show(Busines $busine)
    {
        $this->authorize('haveaccess','busines.show');

        $busines = $busine;
        $titulars = Titular::orderBy('nameTitular')->get();
        $users = User::orderBy('name')->get();
        $covenants = Covenant::orderBy('convenant')->get();
        $turns = Turn::orderBy('descriptionTurn')->get();
        $sectors = Sector::orderBy('descriptionSector')->get();
        $posts = Post::orderBy('namePost')->get();

        return view('busines.view', compact('busines','titulars', 'users','covenants','turns','sectors','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Busines  $busines
     * @return \Illuminate\Http\Response
     */
    public function edit(Busines $busine)
    {
        $this->authorize('haveaccess','busines.edit');

        $busines = $busine;
        $titulars = Titular::orderBy('nameTitular')->get();
        $users = User::orderBy('name')->get();
        $covenants = Covenant::orderBy('convenant')->get();
        $turns = Turn::orderBy('descriptionTurn')->get();
        $sectors = Sector::orderBy('descriptionSector')->get();
        $posts = Post::orderBy('namePost')->get();

        return view('busines.edit', compact('busines','titulars', 'users','covenants','turns','sectors','posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Busines  $busines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Busines $busine)
    {
        $this->authorize('haveaccess','busines.edit');

        $request->validate([
            'rfcBusiness'      => 'required|min:8|max:50',
            'nameBusiness'     => 'required|min:2|max:200',
            'emailBusiness'    => 'required|min:2|max:100|email',
            'misionBusiness'   => 'required|min:5',
            'directionBusiness'=> 'required|min:5',
            'coloniaBusiness'  => 'required|min:5',
            'cityBusiness'     => 'required|min:2|max:100',
            'phoneBusiness'    => 'required|min:2|numeric',
            'cpBusiness'       => 'required|min:4|numeric',
            'personFirma'      => 'required|min:4|max:100',
            'postPerson'       => 'required|min:2|max:100',
            'statusBusines'    => 'required',
            'titulars_id'      => 'required',
            'user_id'          => '',
            'covenants_id'     => 'required',
            'turns_id'         => 'required',
            'sectors_id'       => 'required',
        ]);

        $busine -> update($request->all());

        return redirect()->route('busines.index')
            ->with('status_success','Busines updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Busines  $busines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Busines $busines)
    {
        $this->authorize('haveaccess','busines.destroy');

        $busines->delete();

        return redirect()->route('busines.index')
            ->with('status_success','Busines successfully removed');
    }
}
