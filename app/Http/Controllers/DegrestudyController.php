<?php

namespace App\Http\Controllers;

use App\Degrestudy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DegrestudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','degrestudy.index');

        $degrestudys =  Degrestudy::orderBy('id','Desc')->paginate(5);

        return view('degrestudy.index',compact('degrestudys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','degrestudy.create');

        return view('degrestudy.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','degrestudy.create');

        $request->validate([
            'degreeStudy'     => 'required|max:100|unique:degrestudies,degreeStudy',
            'statusDegree'    => 'required'
        ]);

        $degrestudy = Degrestudy::create($request->all());

        return redirect()->route('degrestudy.index')
            ->with('status_success','Degree study saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Degrestudy  $degrestudy
     * @return \Illuminate\Http\Response
     */
    public function show(Degrestudy $degrestudy)
    {
        $this->authorize('haveaccess','degrestudy.show');

        return view('degrestudy.view', compact('degrestudy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Degrestudy  $degrestudy
     * @return \Illuminate\Http\Response
     */
    public function edit(Degrestudy $degrestudy)
    {
        $this->authorize('haveaccess','degrestudy.edit');

        return view('degrestudy.edit', compact('degrestudy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Degrestudy  $degrestudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Degrestudy $degrestudy)
    {
        $this->authorize('haveaccess','degrestudy.edit');

        $request->validate([
            'degreeStudy'    => 'required|max:100|unique:degrestudies,degreeStudy,'.$degrestudy->id,
            'statusDegree'   => 'required'
        ]);

        $degrestudy -> update($request->all());

        return redirect()->route('degrestudy.index')
            ->with('status_success','Degree study updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Degrestudy  $degrestudy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Degrestudy $degrestudy)
    {
        $this->authorize('haveaccess','degrestudy.destroy');

        $degrestudy->delete();

        return redirect()->route('degrestudy.index')
            ->with('status_success','Degree study successfully removed');
    }
}
