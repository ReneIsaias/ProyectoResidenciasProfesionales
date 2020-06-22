<?php

namespace App\Http\Controllers;

use App\Typesafe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TypesafeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','typesafe.index');
        $typesafes =  typesafe::orderBy('id','Desc')->paginate(5);
        return view('typesafe.index',compact('typesafes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','typesafe.create');
        return view('typesafe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','typesafe.create');
        $request->validate([
            'safeName'      => 'required|max:100|unique:typesaves,safeName',
            'statusSafe'    => 'required'
        ]);
        $typesafe = typesafe::create($request->all());
        return redirect()->route('typesafe.index')
            ->with('status_success','Type Save saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Typesafe  $typesafe
     * @return \Illuminate\Http\Response
     */
    public function show(Typesafe $typesafe)
    {
         $this->authorize('haveaccess','typesafe.show');
        return view('typesafe.view', compact('typesafe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Typesafe  $typesafe
     * @return \Illuminate\Http\Response
     */
    public function edit(Typesafe $typesafe)
    {
         $this->authorize('haveaccess','typesafe.edit');
        return view('typesafe.edit', compact('typesafe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Typesafe  $typesafe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typesafe $typesafe)
    {
        $this->authorize('haveaccess','typesafe.edit');
        $request->validate([
            'safeName'        => 'required|max:100|unique:typesaves,safeName,'.$typesafe->id,
            'statusSafe'      => 'required'
        ]);
        $typesafe -> update($request->all());
        return redirect()->route('typesafe.index')
            ->with('status_success','Type Save updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Typesafe  $typesafe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typesafe $typesafe)
    {
         $this->authorize('haveaccess','typesafe.destroy');
        $typesafe->delete();
        return redirect()->route('typesafe.index')
            ->with('status_success','Type Save successfully removed');
    }
}
