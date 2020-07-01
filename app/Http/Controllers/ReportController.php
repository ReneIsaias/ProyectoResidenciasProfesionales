<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Typefile;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','report.index');

        $reports = Report::with('typefile')->orderBy('id','Desc')->paginate(10);

        return view('report.index',compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','report.create');

        $typefiles = Typefile::where('statusFile',1)->get();

        return view('report.create',compact('typefiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','report.create');

        return $request;

        if($request->hasFile('fileReport')){
            $file = $request->file('fileReport');
            $name = time() . $file->getClientOriginalName();
            $file->move(public_path().'/reports/images/',$name);

            $request->validate([
                'nameReport'        => 'required|min:5|max:100',
                'descriptionReport' => 'required|min:5|max:200',
                'fileReport'        => 'required',
                'statusReport'      => 'required',
                'typefiles_id'      => 'required',
            ]);
        }else{
            return back()->with('status_success','Required file of report');
        }

        $report = Report::create($request->all());

        return redirect()->route('report.index')
            ->with('status_success','Report saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        $this->authorize('haveaccess','report.show');

        $typefiles = Typefile::orderBy('descriptionFile')->get();

        return view('report.view', compact('report','typefiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        $this->authorize('haveaccess','report.edit');

        $typefiles = Typefile::orderBy('descriptionFile')->get();

        return view('report.edit', compact('report','typefiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $this->authorize('haveaccess','report.edit');

        $request->validate([
            'nameReport'        => 'required|min:5|max:100',
            'descriptionReport' => 'required|min:5|max:200',
            'fileReport'        => 'required',
            'statusReport'      => 'required',
            'typefiles_id'      => 'required',
        ]);

        $report -> update($request->all());

        return redirect()->route('report.index')
            ->with('status_success','Report updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $this->authorize('haveaccess','report.destroy');

        $report->delete();

        return redirect()->route('report.index')
            ->with('status_success','Report successfully removed');
    }
}
