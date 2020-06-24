<?php

namespace App\Http\Controllers;

use App\Studyplan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StudyplanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','studyplan.index');

        $studyplans =  Studyplan::orderBy('id','Desc')->paginate(5);

        return view('studyplan.index',compact('studyplans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','studyplan.create');

        return view('studyplan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','studyplan.create');

        $request->validate([
            'planStudies'       => 'required|max:100|unique:studyplans,planStudies',
            'descriptionPlan'   => 'required|max:200',
            'planDate'          => 'required|max:50|date|unique:studyplans,planDate',
            'planStatus'        => 'required'
        ]);

        $studyplan = Studyplan::create($request->all());

        return redirect()->route('studyplan.index')
            ->with('status_success','Study Plan saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Studyplan  $studyplan
     * @return \Illuminate\Http\Response
     */
    public function show(Studyplan $studyplan)
    {
        $this->authorize('haveaccess','studyplan.show');

        return view('studyplan.view', compact('studyplan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Studyplan  $studyplan
     * @return \Illuminate\Http\Response
     */
    public function edit(Studyplan $studyplan)
    {
        $this->authorize('haveaccess','studyplan.edit');

        return view('studyplan.edit', compact('studyplan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Studyplan  $studyplan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studyplan $studyplan)
    {
        $this->authorize('haveaccess','studyplan.edit');

        $request->validate([
            'planStudies'       => 'required|max:100|unique:studyplans,planStudies,'.$studyplan->id,
            'descriptionPlan'   => 'required|max:200',
            'planDate'          => 'required|max:50|date|unique:studyplans,planDate,'.$studyplan->id,
            'planStatus'        => 'required'
        ]);

        $studyplan -> update($request->all());

        return redirect()->route('studyplan.index')
            ->with('status_success','Study Plan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Studyplan  $studyplan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studyplan $studyplan)
    {
        $this->authorize('haveaccess','studyplan.destroy');

        $studyplan->delete();

        return redirect()->route('studyplan.index')
            ->with('status_success','Study Plan successfully removed');
    }
}
