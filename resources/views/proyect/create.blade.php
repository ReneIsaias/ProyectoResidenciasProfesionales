@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Proyect</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('proyect.store') }}" method="POST">
                    @csrf
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
                                value="{{ old('keyProyect') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>nameProyect :</h6>
                            <textarea class="form-control" placeholder="Name of Proyect" name="nameProyect" id="nameProyect" rows="3">{{ old('nameProyect') }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>descriptionProyect :</h6>
                            <textarea class="form-control" placeholder="Description of Proyect" name="descriptionProyect" id="descriptionProyect" rows="3">{{ old('descriptionProyect') }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>objGeneProyect :</h6>
                            <textarea class="form-control" placeholder="Objetive General of Proyect" name="objGeneProyect" id="objGeneProyect" rows="3">{{ old('objGeneProyect') }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>objEspeciProyect :</h6>
                            <textarea class="form-control" placeholder="objetives Especifics of Proyect" name="objEspeciProyect" id="objEspeciProyect" rows="3">{{ old('objEspeciProyect') }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>JustifyProject :</h6>
                            <textarea class="form-control" placeholder="Justify of Proyect" name="JustifyProject" id="JustifyProject" rows="3">{{ old('JustifyProject') }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Date Start :</h6>
                            <input type="date"
                                class="form-control"
                                id="dateStart"
                                placeholder="Date start of proyect"
                                name="dateStart"
                                value="{{ old('dateStart') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Date End :</h6>
                            <input type="date"
                                class="form-control"
                                id="dateEnd"
                                placeholder="Date end of proyect"
                                name="dateEnd"
                                value="{{ old('dateEnd') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Qualification :</h6>
                            <input type="text"
                                class="form-control"
                                id="qualificationProyect"
                                placeholder="Qualification of project"
                                name="qualificationProyect"
                                value="{{ old('qualificationProyect') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Revicion :</h6>
                            <input type="text"
                                class="form-control"
                                id="revisionProyect"
                                placeholder="Revicion of project"
                                name="revisionProyect"
                                value="{{ old('revisionProyect') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Date :</h6>
                            <input type="date"
                                class="form-control"
                                id="dateRevision"
                                placeholder="Date of Revicion of project "
                                name="dateRevision"
                                value="{{ old('dateRevision') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Hourly :</h6>
                            <input type="text"
                                class="form-control"
                                id="hourlyProyect"
                                placeholder="Hourly of project"
                                name="hourlyProyect"
                                value="{{ old('hourlyProyect') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Date :</h6>
                            <input type="date"
                                class="form-control"
                                id="dateRealRevicion"
                                placeholder="Date of Revicion real of project"
                                name="dateRealRevicion"
                                value="{{ old('dateRealRevicion') }}"
                            >
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control"
                                id="statusProject"
                                value="1"
                                name="statusProject"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Situation:</h6>
                            <select class="form-control"
                                id="situationproyects_id"
                                name="situationproyects_id">
                                <option value="">--Seleccione Situation--</option>
                                @foreach ($situationproyects as $situationproyect)
                                    <option value="{{$situationproyect->id}}">{{ old('situationproyect->projectSituation', $situationproyect->projectSituation) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Report:</h6>
                            <select class="form-control"
                                id="reports_id"
                                name="reports_id">
                                <option value="">--Seleccione Report--</option>
                                @foreach ($reports as $report)
                                    <option value="{{$report->id}}">{{ old('report->nameReport', $report->nameReport) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Busines:</h6>
                            <select class="form-control"
                                id="busines_id"
                                name="busines_id">
                                <option value="">--Seleccione Busines--</option>
                                @foreach ($busines as $busine)
                                    <option value="{{$busine->id}}">{{ old('busine->rfcBusiness', $busine->rfcBusiness) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Resident:</h6>
                            <select class="form-control"
                                id="residents_id"
                                name="residents_id">
                                <option value="">--Seleccione Resident--</option>
                                @foreach ($residents as $resident)
                                    <option value="{{$resident->id}}">{{ old('resident->residentRegistration', $resident->residentRegistration) }}</option>
                                @endforeach
                            </select>
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
