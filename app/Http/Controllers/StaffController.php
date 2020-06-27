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
            'keyStaff'          => 'required|min:8|max:30|unique:staff,keyStaff',
            'nameStaff'         => 'required|min:2|max:30',
            'firstLastname'     => 'required|min:2|max:30',
            'secondLastname'    => 'required|min:2|max:30',
            'emailStaff'        => 'required|email|max:50|unique:staff,emailStaff',
            'phoneStaff'        => 'required|numeric|min:10|unique:staff,phoneStaff',
            'statusStaff'       => 'required',
            'posts_id'          => 'required',
            'degrestudies_id'   => 'required',
            'careers_id'        => 'required'
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

        $posts = Post::orderBy('namePost')->get();
        $degrestudys = Degrestudy::orderBy('degreeStudy')->get();
        $careers = Career::orderBy('careerName')->get();

        return view('staff.view', compact('staff','posts', 'degrestudys','careers'));
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

        $posts = Post::orderBy('namePost')->get();
        $degrestudys = Degrestudy::orderBy('degreeStudy')->get();
        $careers = Career::orderBy('careerName')->get();

        return view('staff.edit', compact('staff','posts', 'degrestudys','careers'));
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
            'keyStaff'          => 'required|min:8|max:30|unique:staff,keyStaff,'.$staff->id,
            'nameStaff'         => 'required|min:2|max:30,'.$staff->id,
            'firstLastname'     => 'required|min:2|max:30,'.$staff->id,
            'secondLastname'    => 'required|min:2|max:30,'.$staff->id,
            'emailStaff'        => 'required|email|max:50|unique:staff,emailStaff,'.$staff->id,
            'phoneStaff'        => 'required|numeric|min:10|unique:staff,phoneStaff,'.$staff->id,
            'statusStaff'       => 'required',
            'posts_id'          => 'required',
            'degrestudies_id'   => 'required',
            'careers_id'        => 'required'
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
