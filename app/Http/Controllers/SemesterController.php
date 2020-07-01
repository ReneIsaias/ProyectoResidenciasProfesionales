<?php

namespace App\Http\Controllers;

use App\Semester;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SemesterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','semester.index');

        $semesters =  Semester::orderBy('id','Desc')->paginate(10);

        return view('semester.index',compact('semesters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','semester.create');

        return view('semester.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Gate::authorize('haveaccess','semester.create');

        $request->validate([
            'nameSemester'      => 'required|max:100|unique:semesters,nameSemester',
            'statusSemester'    => 'required',
        ]);

        $semester = Semester::create($request->all());

        return redirect()->route('semester.index')
            ->with('status_success','Semester saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function show(Semester $semester)
    {
        $this->authorize('haveaccess','semester.show');

        return view('semester.view', compact('semester'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function edit(Semester $semester)
    {
        $this->authorize('haveaccess','semester.edit');

        return view('semester.edit', compact('semester'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Semester $semester)
    {
        $this->authorize('haveaccess','semester.edit');

        $request->validate([
            'nameSemester'        => 'required|max:100|unique:semesters,nameSemester,'.$semester->id,
            'statusSemester'      => 'required'
        ]);

        $semester -> update($request->all());

        return redirect()->route('semester.index')
            ->with('status_success','Semester updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Semester  $semester
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semester $semester)
    {
        $this->authorize('haveaccess','semester.destroy');

        $semester->delete();

        return redirect()->route('semester.index')
            ->with('status_success','Semester successfully removed');
    }
}
