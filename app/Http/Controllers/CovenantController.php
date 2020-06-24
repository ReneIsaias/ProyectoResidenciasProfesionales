<?php

namespace App\Http\Controllers;

use App\Covenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CovenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','covenant.index');

        $covenants =  Covenant::orderBy('id','Desc')->paginate(5);

        return view('covenant.index',compact('covenants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','covenant.create');

        return view('covenant.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','covenant.create');

        $request->validate([
            'convenant'             => 'required|max:100|unique:covenants,convenant',
            'descriptionConvenant'  => 'required|max:200',
            'statusConvenant'       => 'required'
        ]);

        $covenant = Covenant::create($request->all());

        return redirect()->route('covenant.index')
            ->with('status_success','Convenant saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function show(Covenant $covenant)
    {
        $this->authorize('haveaccess','covenant.show');

        return view('covenant.view', compact('covenant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Covenant $covenant)
    {
        $this->authorize('haveaccess','covenant.edit');

        return view('covenant.edit', compact('covenant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Covenant $covenant)
    {
        $this->authorize('haveaccess','covenant.edit');

        $request->validate([
            'convenant'             => 'required|max:100|unique:covenants,convenant,'.$covenant->id,
            'descriptionConvenant'  => 'required|max:200',
            'statusConvenant'       => 'required'
        ]);

        $covenant -> update($request->all());

        return redirect()->route('covenant.index')
            ->with('status_success','Convenant updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Covenant  $covenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Covenant $covenant)
    {
        $this->authorize('haveaccess','covenant.destroy');

        $covenant->delete();

        return redirect()->route('covenant.index')
            ->with('status_success','Covenant successfully removed');
    }
}
