<?php

namespace App\Http\Controllers;

use App\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','career.index');
        $careers =  Career::orderBy('id','Desc')->paginate(5);
        return view('career.index',compact('careers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','career.create');
        return view('career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','career.create');
        $request->validate([
            'keyCareer'       => 'required|max:50|unique:careers,keyCareer',
            'careerName'      => 'required|max:50|unique:careers,careerName',
            'careerStatus'    => 'required|max:2'
        ]);
        $career = Career::create($request->all());
        /* if ($request->get('careerStatus')) {
            //return $request->all();
            $role->permissions()->sync($request->get('permission'));
        } */
        return redirect()->route('career.index')
            ->with('status_success','Career saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        $this->authorize('haveaccess','career.show');
        return view('career.view', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        $this->authorize('haveaccess','career.edit');
        return view('career.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        $this->authorize('haveaccess','career.edit');
        $request->validate([
            'keyCareer'         => 'required|max:50|unique:careers,keyCareer,'.$career->id,
            'careerName'        => 'required|max:50|unique:careers,careerName,'.$career->id,
            'careerStatus'      => 'required|max:2'
        ]);
        $career->update($request->all());
        if ($request->get('careerStatus')) {
            $estado = "1";
        }else{
            $estado = "0";
        }
        return redirect()->route('career.index')
            ->with('status_success','Career updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $this->authorize('haveaccess','career.destroy');
        $career->delete();
        return redirect()->route('career.index')
            ->with('status_success','Career successfully removed');
    }
}
