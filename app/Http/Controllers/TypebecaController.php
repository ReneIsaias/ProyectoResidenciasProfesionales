<?php

namespace App\Http\Controllers;

use App\Typebeca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TypebecaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','typebeca.index');
        $typebecas =  Typebeca::orderBy('id','Desc')->paginate(5);
        return view('typebeca.index',compact('typebecas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','typebeca.create');
        return view('typebeca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','typebeca.create');
        $request->validate([
            'descriptionBeca'   => 'required|max:100|unique:typebecas,descriptionBeca',
            'statusBeca'        => 'required'
        ]);
        $typebeca = Typebeca::create($request->all());
        return redirect()->route('typebeca.index')
            ->with('status_success','Type Beca saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Typebeca  $typebeca
     * @return \Illuminate\Http\Response
     */
    public function show(Typebeca $typebeca)
    {
        $this->authorize('haveaccess','typebeca.show');
        return view('typebeca.view', compact('typebeca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Typebeca  $typebeca
     * @return \Illuminate\Http\Response
     */
    public function edit(Typebeca $typebeca)
    {
        $this->authorize('haveaccess','typebeca.edit');
        return view('typebeca.edit', compact('typebeca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Typebeca  $typebeca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typebeca $typebeca)
    {
        $this->authorize('haveaccess','typebeca.edit');
        $request->validate([
            'descriptionBeca'   => 'required|max:100|unique:typebecas,descriptionBeca,'.$typebeca->id,
            'statusBeca'        => 'required'
        ]);
        $typebeca -> update($request->all());
        return redirect()->route('typebeca.index')
            ->with('status_success','Type Beca updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Typebeca  $typebeca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typebeca $typebeca)
    {
         $this->authorize('haveaccess','typebeca.destroy');
        $typebeca->delete();
        return redirect()->route('typebeca.index')
            ->with('status_success','Type Beca successfully removed');
    }
}
