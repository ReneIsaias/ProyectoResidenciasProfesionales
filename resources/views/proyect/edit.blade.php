@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Proyect</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('proyect.update', $proyect->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Key :</h6>
                            <input type="text"
                                class="form-control"
                                id="keyProyect"
                                placeholder="Proyect Key"
                                name="keyProyect"
                                value="{{ old('keyProyect', $proyect->keyProyect ) }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>nameProyect :</h6>
                            <textarea class="form-control" placeholder="Name of Proyect" name="nameProyect" id="nameProyect" rows="3">{{ old('nameProyect', $proyect->nameProyect ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>descriptionProyect :</h6>
                            <textarea class="form-control" placeholder="Description of Proyect" name="descriptionProyect" id="descriptionProyect" rows="3">{{ old('descriptionProyect', $proyect->descriptionProyect ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>objGeneProyect :</h6>
                            <textarea class="form-control" placeholder="Objetive General of Proyect" name="objGeneProyect" id="objGeneProyect" rows="3">{{ old('objGeneProyect', $proyect->objGeneProyect ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>objEspeciProyect :</h6>
                            <textarea class="form-control" placeholder="objetives Especifics of Proyect" name="objEspeciProyect" id="objEspeciProyect" rows="3">{{ old('objEspeciProyect', $proyect->objEspeciProyect ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>JustifyProject :</h6>
                            <textarea class="form-control" placeholder="Justify of Proyect" name="JustifyProject" id="JustifyProject" rows="3">{{ old('JustifyProject', $proyect->JustifyProject ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Date Start :</h6>
                            <input type="date"
                                class="form-control"
                                id="dateStart"
                                placeholder="Date start of proyect"
                                name="dateStart"
                                value="{{ old('dateStart', $proyect->dateStart ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Date End :</h6>
                            <input type="date"
                                class="form-control"
                                id="dateEnd"
                                placeholder="Date end of proyect"
                                name="dateEnd"
                                value="{{ old('dateEnd', $proyect->dateEnd ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Qualification :</h6>
                            <input type="text"
                                class="form-control"
                                id="qualificationProyect"
                                placeholder="Qualification of project"
                                name="qualificationProyect"
                                value="{{ old('qualificationProyect', $proyect->qualificationProyect ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Revicion :</h6>
                            <input type="text"
                                class="form-control"
                                id="revisionProyect"
                                placeholder="Revicion of project"
                                name="revisionProyect"
                                value="{{ old('revisionProyect', $proyect->revisionProyect ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Date :</h6>
                            <input type="date"
                                class="form-control"
                                id="dateRevision"
                                placeholder="Date of Revicion of project "
                                name="dateRevision"
                                value="{{ old('dateRevision', $proyect->dateRevision ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Hourly :</h6>
                            <input type="text"
                                class="form-control"
                                id="hourlyProyect"
                                placeholder="Hourly of project"
                                name="hourlyProyect"
                                value="{{ old('hourlyProyect', $proyect->hourlyProyect ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Date :</h6>
                            <input type="date"
                                class="form-control"
                                id="dateRealRevicion"
                                placeholder="Date of Revicion real of project"
                                name="dateRealRevicion"
                                value="{{ old('dateRealRevicion', $proyect->dateRealRevicion ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Situation :</h6>
                            <select class="form-control" name="situationproyects_id" id="situationproyects_id">
                                @foreach($situationproyects as $situationproyect)
                                    <option value="{{ $situationproyect->id }}"
                                        @if($situationproyect->projectSituation ==  $proyect->situationproyect->projectSituation)
                                            selected
                                        @endif
                                        >
                                        {{ $situationproyect->projectSituation }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Report :</h6>
                            <select class="form-control" name="reports_id" id="reports_id">
                                @foreach($reports as $report)
                                    <option value="{{ $report->id }}"
                                        @if($report->nameReport ==  $proyect->report->nameReport)
                                            selected
                                        @endif
                                        >
                                        {{ $report->nameReport }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Busines :</h6>
                            <select class="form-control" name="busines_id" id="busines_id">
                                @foreach($busines as $busine)
                                    <option value="{{ $busine->id }}"
                                        @if($busine->rfcBusiness ==  $proyect->busine->rfcBusiness)
                                            selected
                                        @endif
                                        >
                                        {{ $busine->rfcBusiness }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Resident :</h6>
                            <select class="form-control" name="residents_id" id="residents_id">
                                @foreach($residents as $resident)
                                    <option value="{{ $resident->id }}"
                                        @if($resident->residentRegistration ==  $proyect->resident->residentRegistration)
                                            selected
                                        @endif
                                        >
                                        {{ $resident->residentRegistration }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusproyect1" name="statusProject" class="custom-control-input" value="1"
                                @if ( $proyect->statusProject =="1" )
                                    checked
                                @elseif ( old('statusProject')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusproyect1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusproyect0" name="statusProject" class="custom-control-input" value="0"
                                @if ( $proyect->statusProject =="0" )
                                    checked
                                @elseif ( old('statusProject')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusproyect0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('proyect.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center><input class="btn btn-primary" type="submit" value="Save"></center>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
