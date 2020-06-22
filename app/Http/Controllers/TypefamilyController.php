<?php

namespace App\Http\Controllers;

use App\Typefamily;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TypefamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         Gate::authorize('haveaccess','typefamily.index');
        $typefamilys =  Typefamily::orderBy('id','Desc')->paginate(5);
        return view('typefamily.index',compact('typefamilys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       Gate::authorize('haveaccess','typefamily.create');
        return view('typefamily.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Gate::authorize('haveaccess','typefamily.create');
        $request->validate([
            'descriptionType'   => 'required|max:100|unique:typefamilies,descriptionType',
            'statusType'        => 'required'
        ]);
        $typefamily = Typefamily::create($request->all());
        return redirect()->route('typefamily.index')
            ->with('status_success','Type family saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Typefamily  $typefamily
     * @return \Illuminate\Http\Response
     */
    public function show(Typefamily $typefamily)
    {
         $this->authorize('haveaccess','typefamily.show');
        return view('typefamily.view', compact('typefamily'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Typefamily  $typefamily
     * @return \Illuminate\Http\Response
     */
    public function edit(Typefamily $typefamily)
    {
         $this->authorize('haveaccess','typefamily.edit');
        return view('typefamily.edit', compact('typefamily'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Typefamily  $typefamily
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Typefamily $typefamily)
    {
        $this->authorize('haveaccess','typefamily.edit');
        $request->validate([
            'descriptionType'   => 'required|max:100|unique:typefamilies,descriptionType,'.$typefamily->id,
            'statusType'        => 'required'
        ]);
        $typefamily -> update($request->all());
        return redirect()->route('typefamily.index')
            ->with('status_success','type family updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Typefamily  $typefamily
     * @return \Illuminate\Http\Response
     */
    public function destroy(Typefamily $typefamily)
    {
        $this->authorize('haveaccess','typefamily.destroy');
        $typefamily->delete();
        return redirect()->route('typefamily.index')
            ->with('status_success','Type family successfully removed');
    }
}
