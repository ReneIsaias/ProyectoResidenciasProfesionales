<?php

namespace App\Http\Controllers;

use App\Proyect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Situationproyect;
use App\Busines;
use App\Resident;

class ProyectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('haveaccess','proyect.index');

        $proyects = Proyect::with('situationproyect','busine','resident')->orderBy('id','Desc')->paginate(10);

        return view('proyect.index',compact('proyects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('haveaccess','proyect.create');

        $situationproyects = Situationproyect::get()->where('projectSituation','=','En proceso');
        $busines = Busines::where('statusBusines',1)->orderBy('id','Desc')->get();
        $residents = Resident::where('statusResident',1)->orderBy('id','Desc')->get();

        return view('proyect.create',compact('situationproyects','busines','residents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gate::authorize('haveaccess','proyect.create');

        $request->validate([
            'keyProyect'            => 'required|min:10|max:50|unique:proyects,keyProyect',
            'nameProyect'           => 'required|min:10|max:200|unique:proyects,nameProyect',
            'descriptionProyect'    => 'required|min:10',
            'objGeneProyect'        => 'required|min:10',
            'objEspeciProyect'      => 'required|min:10',
            'JustifyProject'        => 'required|min:10',
            'dateStart'             => 'required|date',
            'dateEnd'               => 'required|date',
            'qualificationProyect'  => '',
            'revisionProyect'       => '',
            'dateRevision'          => '',
            'hourlyProyect'         => 'required',
            'dateRealRevicion'      => '',
            'statusProject'         => 'required',
            'situationproyects_id'  => 'required',
            'busines_id'            => 'required',
            'residents_id'          => 'required',
        ]);

        $proyect = Proyect::create($request->all());

        return redirect()->route('report.create')
            ->with('status_success','Proyecto registrado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function show(Proyect $proyect)
    {
        $this->authorize('haveaccess','proyect.show');

        $situationproyects = Situationproyect::orderBy('projectSituation')->get();
        $busines = Busines::orderBy('rfcBusiness')->get();
        $residents = Resident::orderBy('residentRegistration')->get();

        return view('proyect.view', compact('proyect','situationproyects','busines','residents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyect $proyect)
    {
        $this->authorize('haveaccess','proyect.edit');

        $situationproyects = Situationproyect::orderBy('projectSituation')->get();
        $busines = Busines::orderBy('rfcBusiness')->get();
        $residents = Resident::orderBy('residentRegistration')->get();

        return view('proyect.edit',  compact('proyect','situationproyects','busines','residents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyect $proyect)
    {
        $this->authorize('haveaccess','proyect.edit');

        $request->validate([
            'keyProyect'            => 'required|min:8|max:50|unique:proyects,keyProyect,'.$proyect->id,
            'nameProyect'           => 'required|min:10|max:200|unique:proyects,nameProyect,'.$proyect->id,
            'descriptionProyect'    => 'required|min:10|unique:proyects,descriptionProyect,'.$proyect->id,
            'objGeneProyect'        => 'required|min:10|unique:proyects,objGeneProyect,'.$proyect->id,
            'objEspeciProyect'      => 'required|min:10|unique:proyects,objEspeciProyect,'.$proyect->id,
            'JustifyProject'        => 'required|min:10|unique:proyects,JustifyProject,'.$proyect->id,
            'dateStart'             => 'required|date',
            'dateEnd'               => 'required|date',
            'qualificationProyect'  => '',
            'revisionProyect'       => '',
            'dateRevision'          => '',
            'hourlyProyect'         => 'required',
            'dateRealRevicion'      => '',
            'statusProject'         => 'required',
            'situationproyects_id'  => 'required',
            'busines_id'            => 'required',
            'residents_id'          => 'required',
        ]);

        $proyect -> update($request->all());

        return redirect()->route('proyect.index')
            ->with('status_success','Proyect updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyect $proyect)
    {
         $this->authorize('haveaccess','proyect.destroy');

        $proyect->delete();

        return redirect()->route('proyect.index')
            ->with('status_success','Proyect successfully removed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyect  $proyect
     * @return \Illuminate\Http\Response
     */
    public function export(Proyect $proyect)
    {
        $this->authorize('haveaccess','project.export');

        try
        {

            $template = new \PhpOffice\PhpWord\TemplateProcessor('documents/SolicitudResidenciaProfesional.docx');

            /* return $proyect->resident; */

            $template->setValue('nombreProyect', $proyect->nameProyect);
            $template->setValue('horarioProyect', $proyect->hourlyProyect);
            $template->setValue('fechaProyect', $proyect->created_at);
            $template->setValue('lugarProyect', $proyect->busine->directionBusiness);

            $template->setValue('nombreEmpresa', $proyect->busine->nameBusiness);
            $template->setValue('giroEmpresa', $proyect->busine->turn->descriptionTurn);
            $template->setValue('sectorEmpresa', $proyect->busine->sector->descriptionSector);
            $template->setValue('rfcEmpresa', $proyect->busine->rfcBusiness);
            $template->setValue('domicilioEmpresa', $proyect->busine->directionBusiness);
            $template->setValue('coloniaEmpresa', $proyect->busine->coloniaBusiness);
            $template->setValue('cpEmpresa', $proyect->busine->cpBusiness);
            $template->setValue('ciudadEmpresa', $proyect->busine->cityBusiness);
            $template->setValue('telefonoEmpresa', $proyect->busine->phoneBusiness);
            $template->setValue('titularEmpresa', $proyect->busine->titular->nameTitular .' '. $proyect->busine->titular->firstLastname .' '. $proyect->busine->titular->secondLastname);
            $template->setValue('puestoTitular', $proyect->busine->titular->post->namePost);
            $template->setValue('asesorEmpresa', $proyect->busine->user->nameUser .' '. $proyect->busine->user->firstLastname .' '. $proyect->busine->user->secondLastname);
            $template->setValue('puestoAsesor ', $proyect->busine->user->post->namePost);
            $template->setValue('responsableEmpresa', $proyect->busine->personFirma);
            $template->setValue('puestoResponsable', $proyect->busine->postPerson);

            $template->setValue('nombreResidente', $proyect->resident->nameResident .' '. $proyect->resident->firtsLastnameResident .' '. $proyect->resident->secondLastnameResident);
            $template->setValue('carreraResidente', $proyect->resident->career->careerName);
            $template->setValue('matriuclaResidente', $proyect->resident->residentRegistration);
            $template->setValue('domicilioResidente', $proyect->resident->directionResident);
            $template->setValue('ciudadResidente', $proyect->resident->cityResident);
            $template->setValue('cpResidente', $proyect->resident->cpResident);
            $template->setValue('emailResidente', $proyect->resident->emailResident);
            $template->setValue('telefonoResidente', $proyect->resident->phoneResident);
            $template->setValue('seguroResidente', $proyect->resident->typesafe->safeName);

            $fileName = $proyect->nameProyect;
            $template->saveAs($fileName . '.docx');

            return response()->download($fileName . '.docx')->deleteFileAfterSend(true);

            /* $temFile = tempnam(sys_get_tem_dir(),'PHPWord');
            $template->saveAs($temFile); */

        }
        catch(\PhpOffice\PhpWord\Exception\Exception $e)
        {
            return back($e->getCode());
        }

        return view('proyect.view', compact('proyect','situationproyects','busines','residents'));
    }
}
