<?php

namespace App\Http\Controllers;

use App\Relative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Typefamily;

class RelativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','relative.index');

        $relatives = Relative::with('typefamily')->orderBy('id','Desc')->paginate(10);

        return view('relative.index',compact('relatives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','relative.create');

        $typefamilys = Typefamily::where('statusType',1)->get();

        return view('relative.create',compact('typefamilys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','relative.create');

        $request->validate([
            'nameRelative'      => 'required|min:2|max:30',
            'firstLastname'     => 'required|min:5|max:30',
            'secondLastname'    => 'required|min:5|max:30',
            'phoneRelative'     => 'required|min:10|numeric|unique:relatives,phoneRelative',
            'directionRelative' => 'required|min:10|max:200',
            'statusRelative'    => 'required',
            'typefamilies_id'   => 'required'
        ]);

        $relative = Relative::create($request->all());

        return redirect()->route('relative.index')
            ->with('status_success','Relative saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function show(Relative $relative)
    {
        $this->authorize('haveaccess','relative.show');

        $typefamilys = Typefamily::orderBy('descriptionType')->get();

        return view('relative.view', compact('relative','typefamilys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function edit(Relative $relative)
    {
        $this->authorize('haveaccess','relative.edit');

        $typefamilys = Typefamily::orderBy('descriptionType')->get();

        return view('relative.edit', compact('relative','typefamilys'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Relative $relative)
    {
        $this->authorize('haveaccess','relative.edit');

        $request->validate([
            'nameRelative'      => 'required|min:2|max:30',
            'firstLastname'     => 'required|min:5|max:30',
            'secondLastname'    => 'required|min:5|max:30',
            'phoneRelative'     => 'required|min:10|numeric|unique:relatives,phoneRelative,'.$relative->id,
            'directionRelative' => 'required|min:10|max:200',
            'statusRelative'    => 'required',
            'typefamilies_id'   => 'required'
        ]);

        $relative -> update($request->all());

        return redirect()->route('relative.index')
            ->with('status_success','Relative updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Relative  $relative
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relative $relative)
    {
        $this->authorize('haveaccess','relative.destroy');

        $relative->delete();

        return redirect()->route('relative.index')
            ->with('status_success','Relative successfully removed');
    }
}
