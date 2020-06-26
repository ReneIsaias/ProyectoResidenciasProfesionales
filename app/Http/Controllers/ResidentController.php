<?php

namespace App\Http\Controllers;

use App\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Career;
use App\Semester;
use App\Typebeca;
use App\Typesafe;
use App\Studyplan;
use App\Relative;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','resident.index');

        $residents = Resident::with('career','semester','typebeca','typesafe','studyplan','relative')->orderBy('id','Desc')->paginate(10);

        return view('resident.index',compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','resident.create');

        $careers = Career::where('careerStatus',1)->get();
        $semesters = Semester::where('statusSemester',1)->get();
        $typebecas = Typebeca::where('statusBeca',1)->get();
        $typesafes = Typesafe::where('statusSafe',1)->get();
        $studyplans = Studyplan::where('planStatus',1)->get();
        $relatives = Relative::where('statusRelative',1)->get();

        return view('resident.create',compact('careers','semesters','typebecas','typesafes','studyplans','relatives'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','resident.create');

        $request->validate([
            'residentRegistration'      => 'required|unique:residents,residentRegistration',
            'nameResident'              => 'required|min:2|max:30',
            'firtsLastnameResident'     => 'required|min:2|max:30',
            'secondLastnameResident'    => 'required|min:2|max:30',
            'emailResident'             => 'required|email|unique:residents,emailResident',
            'phoneResident'             => 'required|numeric|unique:residents,phoneResident',
            'periodResident'            => 'required|min:2|max:100',
            'addessResidente'           => 'required|min:2|max:200',
            'cityResident'              => 'required|min:3|max:100',
            'cpResident'                => 'required|numeric|min:4',
            'statusResident'            => 'required',
            'careers_id'                => 'required',
            'typesaves_id'              => 'required',
            'semesters_id'              => 'required',
            'studyplans_id'             => 'required',
            'relatives_id'              => 'required',
            'typebecas_id'              => 'required'

        ]);

        $resident = Resident::create($request->all());

        return redirect()->route('resident.index')
            ->with('status_success','Resident saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function show(Resident $resident)
    {
        $this->authorize('haveaccess','resident.show');

        $careers = Career::orderBy('careerName')->get();
        $typesafes = Typesafe::orderBy('safeName')->get();
        $semesters = Semester::orderBy('nameSemester')->get();
        $studyplans = Studyplan::orderBy('planStudies')->get();
        $relatives = Relative::orderBy('nameRelative')->get();
        $typebecas = Typebeca::orderBy('descriptionBeca')->get();

        return view('resident.view', compact('resident','careers', 'typesafes','semesters','studyplans','relatives','typebecas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident)
    {
        $this->authorize('haveaccess','resident.edit');

        $careers = Career::orderBy('careerName')->get();
        $typesafes = Typesafe::orderBy('safeName')->get();
        $semesters = Semester::orderBy('nameSemester')->get();
        $studyplans = Studyplan::orderBy('planStudies')->get();
        $relatives = Relative::orderBy('nameRelative')->get();
        $typebecas = Typebeca::orderBy('descriptionBeca')->get();

        return view('resident.edit', compact('resident','careers', 'typesafes','semesters','studyplans','relatives','typebecas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resident $resident)
    {
        $this->authorize('haveaccess','resident.edit');

        $request->validate([
            'residentRegistration'      => 'required|min:2|unique:residents,residentRegistration,'.$resident->id,
            'nameResident'              => 'required|min:2|max:30,'.$resident->id,
            'firtsLastnameResident'     => 'required|min:2|max:30,'.$resident->id,
            'secondLastnameResident'    => 'required|min:2|max:30,'.$resident->id,
            'emailResident'             => 'required|email|max:50|unique:residents,emailResident,'.$resident->id,
            'phoneResident'             => 'required|numeric|min:10|unique:residents,phoneResident,'.$resident->id,
            'periodResident'            => 'required|min:2|max:100',
            'addessResidente'           => 'required|min:2|max:200',
            'cityResident'              => 'required|min:3|max:100',
            'cpResident'                => 'required|numeric|min:4',
            'statusResident'            => 'required',
            'careers_id'                => 'required',
            'typesaves_id'              => 'required',
            'semesters_id'              => 'required',
            'studyplans_id'             => 'required',
            'relatives_id'              => 'required',
            'typebecas_id'              => 'required'
        ]);

        $resident -> update($request->all());

        return redirect()->route('resident.index')
            ->with('status_success','Resident updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resident $resident)
    {
        $this->authorize('haveaccess','resident.destroy');

        $resident->delete();

        return redirect()->route('resident.index')
            ->with('status_success','Resident successfully removed');
    }
}
