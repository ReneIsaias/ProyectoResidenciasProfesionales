<?php

namespace App\Http\Controllers;

use App\Resident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Career;
use App\Semester;
use App\Typebeca;
use App\Typesafe;
use App\Studyplan;
use App\Relative;
use App\Persona;

use App\Typefamily;

use App\Permission\Models\Role;

use App\User;
use Illuminate\Support\Facades\Auth;

use App\Typefamily;

use App\User;

class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','resident.index');

        $residents = Resident::with('career','semester','typebeca','typesafe','studyplan','relative')->orderBy('id','Desc')->paginate(25);

        return view('resident.index',compact('residents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','resident.create');

        $careers = Career::where('careerStatus',1)->get();
        $semesters = Semester::where('statusSemester',1)->get();
        $typebecas = Typebeca::where('statusBeca',1)->get();
        $typesafes = Typesafe::where('statusSafe',1)->get();
        $studyplans = Studyplan::where('planStatus',1)->get();
        $relatives = Relative::where('statusRelative',1)->orderBy('id','Desc')->get();

        return view('resident.create',compact('careers','semesters','typebecas','typesafes','studyplans','relatives'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','resident.create');

        $request->validate([
            'residentRegistration'    => 'required|unique:residents,residentRegistration',
            'nameResident'            => 'required|min:2|max:30',
            'firtsLastnameResident'   => 'required|min:2|max:30',
            'secondLastnameResident'  => 'required|min:2|max:30',
            'emailResident'           => 'required|email|unique:residents,emailResident',
            'phoneResident'           => 'required|numeric|unique:residents,phoneResident',
            'periodResident'          => 'required|min:2|max:100',
            'directionResident'       => 'required|min:2|max:200',
            'cityResident'            => 'required|min:3|max:100',
            'cpResident'              => 'required|numeric|min:4',
            'statusResident'          => 'required',
            'careers_id'              => 'required',
            'typesaves_id'            => 'required',
            'semesters_id'            => 'required',
            'studyplans_id'           => 'required',
            'relatives_id'            => '',
            'typebecas_id'            => 'required'

        ]);

        $resident = Resident::create($request->all());

<<<<<<< HEAD
        return redirect()->route('titular.create')
            ->with('status_success','Residente registrado satisfactoriamente');
=======
        return redirect()->route('relative.create')
            ->with('status_success','Resident saved successfully');
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function show(Resident $resident)
    {
        $this->authorize('haveaccess','resident.show');

        $careers = Career::orderBy('careerName')->get();
        $typesafes = Typesafe::orderBy('safeName')->get();
        $semesters = Semester::orderBy('nameSemester')->get();
        $studyplans = Studyplan::orderBy('planStudies')->get();
        $relatives = Relative::get();
        /* $relatives = Relative::orderBy('nameRelative')->get(); */
        $typebecas = Typebeca::orderBy('descriptionBeca')->get();
        $typefamilys = Typefamily::orderBy('descriptionType')->get();
        $roles = Role::orderBy('name')->get();

        $useres = User::orderBy('name')->get();

        $resident_user=[];

<<<<<<< HEAD
        foreach($resident->users as $asesor) {
            $resident_user[]=$asesor->id;
        }

        return view('resident.view', compact('resident','careers', 'typesafes','semesters','studyplans','relatives','typebecas', 'typefamilys','useres','resident_user','roles'));
=======
        $typefamilys = Typefamily::orderBy('descriptionType')->get();

        $users = User::get();

        $resident_user=[];

        foreach($resident->users as $user) {
            $resident_user[]= $user->id;
        }

        return view('resident.view', compact('resident','careers', 'typesafes','semesters','studyplans','relatives','typebecas', 'typefamilys','users','resident_user'));
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident)
    {
        $this->authorize('haveaccess','resident.edit');

        $careers = Career::orderBy('careerName')->get();
        $typesafes = Typesafe::orderBy('safeName')->get();
        $semesters = Semester::orderBy('nameSemester')->get();
        $studyplans = Studyplan::orderBy('planStudies')->get();
        $relatives = Relative::orderBy('nameRelative')->get();
        $typebecas = Typebeca::orderBy('descriptionBeca')->get();
<<<<<<< HEAD
        $typefamilys = Typefamily::orderBy('descriptionType')->get();

        $roles = Role::orderBy('name')->get();

        $useres = User::orderBy('name')->get();

        $resident_user=[];

        foreach($resident->users as $asesor) {
            $resident_user[]=$asesor->id;
        }

        return view('resident.edit', compact('resident','careers', 'typesafes','semesters','studyplans','relatives','typebecas', 'typefamilys','useres','resident_user','roles'));
=======
        $users = User::get();

        return view('resident.edit', compact('resident','careers', 'typesafes','semesters','studyplans','relatives','typebecas', 'users'));
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resident $resident)
    {
        $this->authorize('haveaccess','resident.edit');

        $request->validate([
            'residentRegistration'   => 'required|min:2|unique:residents,residentRegistration,'.$resident->id,
            'nameResident'           => 'required|min:2|max:30',
            'firtsLastnameResident'  => 'required|min:2|max:30',
            'secondLastnameResident' => 'required|min:2|max:30',
            'emailResident'          => 'required|email|max:50|unique:residents,emailResident,'.$resident->id,
            'phoneResident'          => 'required|numeric|min:10|unique:residents,phoneResident,'.$resident->id,
            'periodResident'         => 'required|min:2|max:100',
            'directionResident'      => 'required|min:2|max:200',
            'cityResident'           => 'required|min:3|max:100',
            'cpResident'             => 'required|numeric|min:4',
            'statusResident'         => 'required',
            'careers_id'             => 'required',
            'typesaves_id'           => 'required',
            'semesters_id'           => 'required',
            'studyplans_id'          => 'required',
            'relatives_id'           => '',
            'typebecas_id'           => 'required',
        ]);

        $resident -> update($request->all());

<<<<<<< HEAD
        if ($request->get('asesor')) {
            /* return "Si hay asesores"; */
            $resident->users()->sync($request->get('asesor'));
            /* return "Se sopone que se asignaron asesores"; */
=======
        if ($request->get('user')) {
            /* return $request->all(); */
            $resident->users()->sync($request->get('user'));
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
        }

        return redirect()->route('resident.index')
            ->with('status_success','Resident updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resident $resident)
    {
        $this->authorize('haveaccess','resident.destroy');

        $resident->delete();

        return redirect()->route('resident.index')
            ->with('status_success','Resident successfully removed');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        /* Gate::authorize('haveaccess','resident.index'); */

        /* $residents = Resident::with('career','semester','typebeca','typesafe','studyplan','relative')->orderBy('id','Desc')->paginate(10); */

        return view('resident.search');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tramita(Request $request)
    {
        /* Gate::authorize('haveaccess','resident.create'); */

        $request->validate([
            'clvPersona'    => 'required|numeric',
        ]);

        if($resident = Persona::find($request->clvPersona)){

            if($resident->statusPersona == 0){

                return redirect()->route('search')
                ->with('status_success','Le notificamos que usted aun no puede realizar el tramite de las residencias profesionales, esto se debe a que aun no cuenta con los creditos suficientes o tiene un adeudo. Por el contrario si esta seguro de que ya puede realizar el tramite, hagaselo saber a su Jefe de Divicion para que le autorize XD');

            }elseif($resident->statusPersona == 1){

                if(Auth::user())
                {

                    return redirect()->route('relative.create');
                   /*  Gate::authorize('haveaccess','resident.create');

                    $careers = Career::where('careerStatus',1)->get();
                    $semesters = Semester::where('statusSemester',1)->get();
                    $typebecas = Typebeca::where('statusBeca',1)->get();
                    $typesafes = Typesafe::where('statusSafe',1)->get();
                    $studyplans = Studyplan::where('planStatus',1)->get();
                    $relatives = Relative::where('statusRelative',1)->get();

                    return view('resident.create',compact('careers','semesters','typebecas','typesafes','studyplans','relatives', 'resident')); */
                }else{

                    return redirect()->route('search')
                        ->with('status_success','Le notificamos que si esta disponible para realizar el tramite, pero debe de registrarse primero en esta pagina para proceder con el tramite');
                }
            }

        }else{

            return redirect()->route('search')
                ->with('status_success','Lo sentimos pero no encontramos su matricula en nuestra base de datos, verifiquela');
        }
    }
}
