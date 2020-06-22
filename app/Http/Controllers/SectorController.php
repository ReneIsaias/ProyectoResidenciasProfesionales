<?php

namespace App\Http\Controllers;

use App\Sector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','sector.index');
        $sectors =  Sector::orderBy('id','Desc')->paginate(5);
        return view('sector.index',compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','sector.create');
        return view('sector.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','sector.create');
        $request->validate([
            'descriptionSector'     => 'required|max:100|unique:sectors,descriptionSector',
            'statusSector'          => 'required'
        ]);
        $sector = Sector::create($request->all());
        return redirect()->route('sector.index')
            ->with('status_success','Sector saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function show(Sector $sector)
    {
        $this->authorize('haveaccess','sector.show');
        return view('sector.view', compact('sector'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function edit(Sector $sector)
    {
         $this->authorize('haveaccess','sector.edit');
        return view('sector.edit', compact('sector'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sector $sector)
    {
        $this->authorize('haveaccess','sector.edit');
        $request->validate([
            'descriptionSector'     => 'required|max:100|unique:sectors,descriptionSector,'.$sector->id,
            'statusSector'          => 'required'
        ]);
        $sector -> update($request->all());
        return redirect()->route('sector.index')
            ->with('status_success','Sector updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sector  $sector
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sector $sector)
    {
        $this->authorize('haveaccess','sector.destroy');
        $sector->delete();
        return redirect()->route('sector.index')
            ->with('status_success','Sector successfully removed');
    }
}
