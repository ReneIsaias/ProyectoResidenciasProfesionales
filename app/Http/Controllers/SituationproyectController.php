<?php

namespace App\Http\Controllers;

use App\Situationproyect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SituationproyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','situationproyect.index');
        $situationproyects =  Situationproyect::orderBy('id','Desc')->paginate(5);
        return view('situationproyect.index',compact('situationproyects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','situationproyect.create');
        return view('situationproyect.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','situationproyect.create');
        $request->validate([
            'projectSituation'      => 'required|max:100|unique:situationproyects,projectSituation',
            'statusSituation'       => 'required'
        ]);
        $situationproyect = Situationproyect::create($request->all());
        return redirect()->route('situationproyect.index')
            ->with('status_success','Situation proyect saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Situationproyect  $situationproyect
     * @return \Illuminate\Http\Response
     */
    public function show(Situationproyect $situationproyect)
    {
        $this->authorize('haveaccess','situationproyect.show');
        return view('situationproyect.view', compact('situationproyect'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Situationproyect  $situationproyect
     * @return \Illuminate\Http\Response
     */
    public function edit(Situationproyect $situationproyect)
    {
        $this->authorize('haveaccess','situationproyect.edit');
        return view('situationproyect.edit', compact('situationproyect'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Situationproyect  $situationproyect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Situationproyect $situationproyect)
    {
        $this->authorize('haveaccess','situationproyect.edit');
        $request->validate([
            'projectSituation'     => 'required|max:100|unique:situationproyects,projectSituation,'.$situationproyect->id,
            'statusSituation'      => 'required'
        ]);
        $situationproyect -> update($request->all());
        return redirect()->route('situationproyect.index')
            ->with('status_success','Situation proyect updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Situationproyect  $situationproyect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Situationproyect $situationproyect)
    {
        $this->authorize('haveaccess','situationproyect.destroy');
        $situationproyect->delete();
        return redirect()->route('situationproyect.index')
            ->with('status_success','Situation proyect successfully removed');
    }
}
