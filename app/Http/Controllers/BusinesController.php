<?php

namespace App\Http\Controllers;

use App\Busines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Titular;
use App\Staff;
use App\Covenant;
use App\Turn;
use App\Sector;

class BusinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','busines.index');

        $business = Busines::with('titular','staff','covenant','turn','sector')->orderBy('id','Desc')->paginate(10);

        return view('busines.index',compact('business'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','busines.create');

        $titulars = Titular::where('statusTitular',1)->get();
        $staffs = Staff::where('statusStaff',1)->get();
        $covenants = Covenant::where('statusConvenant',1)->get();
        $turns = Turn::where('statusTurn',1)->get();
        $sectors = Sector::where('statusSector',1)->get();

        return view('busines.create',compact('titulars','staffs','covenants','turns','sectors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       Gate::authorize('haveaccess','busines.create');

        $request->validate([
            'rfcBusiness'      => 'required|min:8|max:50',
            'nameBusiness'     => 'required|min:2|max:200',
            'emailBusiness'    => 'required|min:2|max:100|email',
            'misionBusiness'   => 'required|min:2',
            'addresBusiness'   => 'required',
            'coloniaBusiness'  => 'required|min:10',
            'cityBusiness'     => 'required|min:2|max:100',
            'phoneBusiness'    => 'required|min:2|numeric',
            'cpBusiness'       => 'required|min:4|numeric',
            'personFirma'      => 'required|min:4|max:100',
            'postPerson'       => 'required|min:2|max:100',
            'statusBusines'    => 'required',
            'titulars_id'      => 'required',
            'staff_id'         => 'required',
            'covenants_id'     => 'required',
            'turns_id'         => 'required',
            'sectors_id'       => 'required'
        ]);

        $busines = Busines::create($request->all());

        return redirect()->route('busines.index')
            ->with('status_success','busines saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Busines  $busines
     * @return \Illuminate\Http\Response
     */
    public function show(Busines $busines)
    {
        $this->authorize('haveaccess','busines.show');

        $titulars = Titular::orderBy('nameTitular')->get();
        $staffs = Staff::orderBy('nameStaff')->get();
        $covenants = Covenant::orderBy('descriptionConvenant')->get();
        $turns = Turn::orderBy('descriptionTurn')->get();
        $sectors = Sector::orderBy('descriptionSector')->get();

        return view('busines.view', compact('busines','titulars', 'staffs','covenants','turns','sectors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Busines  $busines
     * @return \Illuminate\Http\Response
     */
    public function edit(Busines $busines)
    {
        $this->authorize('haveaccess','busines.edit');

        $titulars = Titular::orderBy('nameTitular')->get();
        $staffs = Staff::orderBy('nameStaff')->get();
        $covenants = Covenant::orderBy('descriptionConvenant')->get();
        $turns = Turn::orderBy('descriptionTurn')->get();
        $sectors = Sector::orderBy('descriptionSector')->get();

        return view('busines.edit', compact('busines','titulars', 'staffs','covenants','turns','sectors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Busines  $busines
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Busines $busines)
    {
         $this->authorize('haveaccess','busines.edit');

        $request->validate([
            'rfcBusiness'      => 'required|min:8|max:50,'.$busines->id,
            'nameBusiness'     => 'required|min:2|max:200,'.$busines->id,
            'emailBusiness'    => 'required|min:2|max:100|email,'.$busines->id,
            'misionBusiness'   => 'required|min:2,'.$busines->id,
            'addresBusiness'   => 'required,'.$busines->id,
            'coloniaBusiness'  => 'required|min:10',
            'cityBusiness'     => 'required|min:2|max:100',
            'phoneBusiness'    => 'required|min:2|numeric',
            'cpBusiness'       => 'required|min:4|numeric',
            'personFirma'      => 'required|min:4|max:100',
            'postPerson'       => 'required|min:2|max:100',
            'statusBusines'    => 'required',
            'titulars_id'      => 'required',
            'staff_id'         => 'required',
            'covenants_id'     => 'required',
            'turns_id'         => 'required',
            'sectors_id'       => 'required'
        ]);

        $busines -> update($request->all());

        return redirect()->route('busines.index')
            ->with('status_success','Busines updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Busines  $busines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Busines $busines)
    {
         $this->authorize('haveaccess','busines.destroy');

        $busines->delete();

        return redirect()->route('busines.index')
            ->with('status_success','Busines successfully removed');
    }
}
