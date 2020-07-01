<?php

namespace App\Http\Controllers;

use App\Proyect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Situationproyect;
use App\Busines;
use App\Resident;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','proyect.index');

        $proyects = Proyect::with('situationproyect','busine','resident')->orderBy('id','Desc')->paginate(10);

        return view('proyect.index',compact('proyects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','proyect.create');

        $situationproyects = Situationproyect::where('statusSituation',1)->get();
        $busines = Busines::where('statusBusines',1)->get();
        $residents = Resident::where('statusResident',1)->get();

        return view('proyect.create',compact('situationproyects','reports','busines','residents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','proyect.create');

        $request->validate([
            'keyProyect'            => 'required|min:8|max:50|unique:proyects,keyProyect',
            'nameProyect'           => 'required|min:10|max:200|unique:proyects,nameProyect',
            'descriptionProyect'    => 'required|min:10',
            'objGeneProyect'        => 'required|min:10',
            'objEspeciProyect'      => 'required|min:10',
            'JustifyProject'        => 'required|min:10',
            'dateStart'             => 'required|date',
            'dateEnd'               => 'required|date',
            'qualificationProyect'  => '',
            'revisionProyect'       => '',
            'dateRevision'          => '',
            'hourlyProyect'         => 'required',
            'dateRealRevicion'      => '',
            'statusProject'         => 'required',
            'situationproyects_id'  => 'required',
            'busines_id'            => 'required',
            'residents_id'          => 'required'
        ]);

        $proyect = Proyect::create($request->all());

        return redirect()->route('proyect.index')
            ->with('status_success','Proyect saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function show(Proyect $proyect)
    {
        $this->authorize('haveaccess','proyect.show');

        $situationproyects = Situationproyect::orderBy('projectSituation')->get();
        $busines = Busines::orderBy('rfcBusiness')->get();
        $residents = Resident::orderBy('residentRegistration')->get();

        return view('proyect.view', compact('proyect','situationproyects','busines','residents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyect $proyect)
    {
        $this->authorize('haveaccess','proyect.edit');

        $situationproyects = Situationproyect::orderBy('projectSituation')->get();
        $busines = Busines::orderBy('rfcBusiness')->get();
        $residents = Resident::orderBy('residentRegistration')->get();

        return view('proyect.edit',  compact('proyect','situationproyects','busines','residents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyect $proyect)
    {
        $this->authorize('haveaccess','proyect.edit');

        $request->validate([
            'keyProyect'            => 'required|min:8|max:50|unique:proyects,keyProyect,'.$proyect->id,
            'nameProyect'           => 'required|min:10|max:200|unique:proyects,nameProyect,'.$proyect->id,
            'descriptionProyect'    => 'required|min:10|unique:proyects,descriptionProyect,'.$proyect->id,
            'objGeneProyect'        => 'required|min:10|unique:proyects,objGeneProyect,'.$proyect->id,
            'objEspeciProyect'      => 'required|min:10|unique:proyects,objEspeciProyect,'.$proyect->id,
            'JustifyProject'        => 'required|min:10|unique:proyects,JustifyProject,'.$proyect->id,
            'dateStart'             => 'required|date',
            'dateEnd'               => 'required|date',
            'qualificationProyect'  => '',
            'revisionProyect'       => '',
            'dateRevision'          => '',
            'hourlyProyect'         => 'required',
            'dateRealRevicion'      => '',
            'statusProject'         => 'required',
            'situationproyects_id'  => 'required',
            'busines_id'            => 'required',
            'residents_id'          => 'required',
        ]);

        $proyect -> update($request->all());

        return redirect()->route('proyect.index')
            ->with('status_success','Proyect updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyect $proyect)
    {
         $this->authorize('haveaccess','proyect.destroy');

        $proyect->delete();

        return redirect()->route('proyect.index')
            ->with('status_success','Proyect successfully removed');
    }
}
