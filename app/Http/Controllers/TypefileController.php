<?php

namespace App\Http\Controllers;

use App\Typefile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TypefileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','typefile.index');

        $typefiles = Typefile::orderBy('id','Desc')->paginate(10);

        return view('typefile.index',compact('typefiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','typefile.create');

        return view('typefile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','typefile.create');

        $request->validate([
            'descriptionFile'   => 'required|max:100|unique:typefiles,descriptionFile',
            'statusFile'        => 'required'
        ]);

        $typefile = Typefile::create($request->all());

        return redirect()->route('typefile.index')
            ->with('status_success','Type file saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Typefile  $typefile
     * @return \Illuminate\Http\Response
     */
    public function show(Typefile $typefile)
    {
        $this->authorize('haveaccess','typefile.show');

        return view('typefile.view', compact('typefile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Typefile  $typefile
     * @return \Illuminate\Http\Response
     */
    public function edit(Typefile $typefile)
    {
        $this->authorize('haveaccess','typefile.edit');

        return view('typefile.edit', compact('typefile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Typefile  $typefile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typefile $typefile)
    {
        $this->authorize('haveaccess','typefile.edit');

        $request->validate([
            'descriptionFile'   => 'required|max:100|unique:typefiles,descriptionFile,'.$typefile->id,
            'statusFile'        => 'required'
        ]);

        $typefile -> update($request->all());

        return redirect()->route('typefile.index')
            ->with('status_success','Type file updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Typefile  $typefile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typefile $typefile)
    {
        $this->authorize('haveaccess','typefile.destroy');

        $typefile->delete();

        return redirect()->route('typefile.index')
            ->with('status_success','Type file successfully removed');
    }
}
