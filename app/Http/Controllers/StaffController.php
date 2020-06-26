<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Post;
use App\Degrestudy;
use App\Career;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','staff.index');

        $staffs = Staff::with('post','degrestudy','career')->orderBy('id','Desc')->paginate(10);

        return view('staff.index',compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','staff.create');

        $posts = Post::where('statusPost',1)->get();
        $degrestudys = Degrestudy::where('statusDegree',1)->get();
        $careers = Career::where('careerStatus',1)->get();

        return view('staff.create',compact('posts','degrestudys','careers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','staff.create');

        $request->validate([
            'staffRegistration'      => 'required|min:8|numeric',
            'namestaff'              => 'required|min:2|max:30',
            'firtsLastnamestaff'     => 'required|min:2|max:30',
            'secondLastnamestaff'    => 'required|min:2|max:30',
            'emailstaff'             => 'required|email|max:50',
            'phonestaff'             => 'required|numeric|min:10',
            'periodstaff'            => 'required|min:2|max:100',
            'addessstaffe'           => 'required|min:2|max:200',
            'citystaff'              => 'required|min:3|max:100',
            'cpstaff'                => 'required|numeric|min:4',
            'statusstaff'            => 'required',
            'careers_id'                => 'required',
            'typesaves_id'              => 'required',
            'semesters_id'              => 'required',
            'studyplans_id'             => 'required',
            'relatives_id'              => 'required',
            'typebecas_id'              => 'required'

        ]);

        $staff = Staff::create($request->all());

        return redirect()->route('staff.index')
            ->with('status_success','Staff saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        $this->authorize('haveaccess','staff.show');

        $careers = Career::orderBy('careerName')->get();
        $typesafes = Typesafe::orderBy('safeName')->get();
        $semesters = Semester::orderBy('nameSemester')->get();
        $studyplans = Studyplan::orderBy('planStudies')->get();
        $relatives = Relative::orderBy('nameRelative')->get();
        $typebecas = Typebeca::orderBy('descriptionBeca')->get();

        return view('staff.view', compact('staff','careers', 'typesafes','semesters','studyplans','relatives','typebecas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        $this->authorize('haveaccess','staff.edit');

        $careers = Career::orderBy('careerName')->get();
        $typesafes = Typesafe::orderBy('safeName')->get();
        $semesters = Semester::orderBy('nameSemester')->get();
        $studyplans = Studyplan::orderBy('planStudies')->get();
        $relatives = Relative::orderBy('nameRelative')->get();
        $typebecas = Typebeca::orderBy('descriptionBeca')->get();

        return view('staff.edit', compact('staff','careers', 'typesafes','semesters','studyplans','relatives','typebecas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        $this->authorize('haveaccess','staff.edit');

        $request->validate([
            'staffRegistration'      => 'required|min:2,'.$staff->id,
            'namestaff'              => 'required|min:2|max:30,'.$staff->id,
            'firtsLastnamestaff'     => 'required|min:2|max:30,'.$staff->id,
            'secondLastnamestaff'    => 'required|min:2|max:30,'.$staff->id,
            'emailstaff'             => 'required|email|max:50',
            'phonestaff'             => 'required|numeric|min:10',
            'periodstaff'            => 'required|min:2|max:100',
            'addessstaffe'           => 'required|min:2|max:200',
            'citystaff'              => 'required|min:3|max:100',
            'cpstaff'                => 'required|numeric|min:4',
            'statusstaff'            => 'required',
            'careers_id'                => 'required',
            'typesaves_id'              => 'required',
            'semesters_id'              => 'required',
            'studyplans_id'             => 'required',
            'relatives_id'              => 'required',
            'typebecas_id'              => 'required'
        ]);

        $staff -> update($request->all());

        return redirect()->route('staff.index')
            ->with('status_success','Staff updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $this->authorize('haveaccess','staff.destroy');

        $staff->delete();

        return redirect()->route('staff.index')
            ->with('status_success','Staff successfully removed');
    }
}
