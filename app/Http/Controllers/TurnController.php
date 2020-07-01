<?php

namespace App\Http\Controllers;

use App\Turn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TurnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','turn.index');

        $turns =  Turn::orderBy('id','Desc')->paginate(10);

        return view('turn.index',compact('turns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','turn.create');

        return view('turn.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','turn.create');

        $request->validate([
            'descriptionTurn'   => 'required|max:100|unique:turns,descriptionTurn',
            'statusTurn'        => 'required'
        ]);

        $turn = Turn::create($request->all());

        return redirect()->route('turn.index')
            ->with('status_success','Turn saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turn  $turn
     * @return \Illuminate\Http\Response
     */
    public function show(Turn $turn)
    {
        $this->authorize('haveaccess','turn.show');

        return view('turn.view', compact('turn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turn  $turn
     * @return \Illuminate\Http\Response
     */
    public function edit(Turn $turn)
    {
        $this->authorize('haveaccess','turn.edit');

        return view('turn.edit', compact('turn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turn  $turn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turn $turn)
    {
        $this->authorize('haveaccess','turn.edit');

        $request->validate([
            'descriptionTurn'   => 'required|max:100|unique:turns,descriptionTurn,'.$turn->id,
            'statusTurn'        => 'required'
        ]);

        $turn -> update($request->all());

        return redirect()->route('turn.index')
            ->with('status_success','Turn updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turn  $turn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turn $turn)
    {
        $this->authorize('haveaccess','turn.destroy');

        $turn->delete();

        return redirect()->route('turn.index')
            ->with('status_success','Turn successfully removed');
    }
}
