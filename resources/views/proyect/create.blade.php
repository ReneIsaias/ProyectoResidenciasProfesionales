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
                            <h6>Clave :</h6>
                            <input type="text"
                                class="form-control @error('keyProyect') is-invalid @enderror"
                                id="keyProyect" placeholder="Clave del proyecto"
                                name="keyProyect" value="{{ old('keyProyect') }}"
                                autocomplete="keyProyect" required autofocus
                            >
                            @error('keyProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <textarea class="form-control @error('nameProyect') is-invalid @enderror" required placeholder="Nombre del proyecto" name="nameProyect" id="nameProyect" rows="3">{{ old('nameProyect') }}</textarea>
                            @error('nameProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Descripcion :</h6>
                            <textarea class="form-control @error('descriptionProyect') is-invalid @enderror" required placeholder="Descripcion del proyecto  " name="descriptionProyect" id="descriptionProyect" rows="3">{{ old('descriptionProyect') }}</textarea>
                            @error('descriptionProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Objetivo general :</h6>
                            <textarea class="form-control @error('objGeneProyect') is-invalid @enderror" required placeholder="Objetivo general del proyecto" name="objGeneProyect" id="objGeneProyect" rows="3">{{ old('objGeneProyect') }}</textarea>
                            @error('objGeneProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Objetivo Especifico :</h6>
                            <textarea class="form-control @error('objEspeciProyect') is-invalid @enderror" required placeholder="Objetivo especifico del proyecto" name="objEspeciProyect" id="objEspeciProyect" rows="3">{{ old('objEspeciProyect') }}</textarea>
                            @error('objEspeciProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Justficacion :</h6>
                            <textarea class="form-control @error('JustifyProject') is-invalid @enderror" required placeholder="Justificacion del proyecto" name="JustifyProject" id="JustifyProject" rows="3">{{ old('JustifyProject') }}</textarea>
                            @error('JustifyProject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Fecha de inicio :</h6>
                            <input type="date"
                                class="form-control @error('dateStart') is-invalid @enderror"
                                id="dateStart" placeholder="Fecha de inicio del proyecto"
                                name="dateStart" value="{{ old('dateStart') }}"
                                autocomplete="dateStart" required
                            >
                            @error('dateStart')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Fecha de termino :</h6>
                            <input type="date"
                                class="form-control @error('dateEnd') is-invalid @enderror"
                                id="dateEnd" placeholder="Fecha de termino del proyecto"
                                name="dateEnd" value="{{ old('dateEnd') }}"
                                autocomplete="dateEnd" required
                            >
                            @error('dateEnd')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Calificacion :</h6>
                            <input type="text"
                                class="form-control @error('qualificationProyect') is-invalid @enderror"
                                id="qualificationProyect" placeholder="Qualification of project"
                                name="qualificationProyect" value="{{ old('qualificationProyect') }}"
                                autocomplete="qualificationProyect"
                            >
                            @error('qualificationProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Revicion :</h6>
                            <input type="text"
                                class="form-control @error('revisionProyect') is-invalid @enderror" id="revisionProyect"
                                placeholder="Revicion of project" name="revisionProyect"
                                value="{{ old('revisionProyect') }}"
                                autocomplete="revisionProyect"
                            >
                            @error('revisionProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Fecha de revicion :</h6>
                            <input type="date"
                                class="form-control @error('dateRevision') is-invalid @enderror"
                                id="dateRevision" placeholder="Date of Revicion of project "
                                name="dateRevision" value="{{ old('dateRevision') }}"
                                autocomplete="dateRevision"
                            >
                            @error('dateRevision')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Horario :</h6>
                            <input type="text"
                                class="form-control @error('hourlyProyect') is-invalid @enderror"
                                id="hourlyProyect" placeholder="Horario"
                                name="hourlyProyect" value="{{ old('hourlyProyect') }}"
                                autocomplete="hourlyProyect"  required
                            >
                            @error('hourlyProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Revicion real :</h6>
                            <input type="date"
                                class="form-control @error('dateRealRevicion') is-invalid @enderror"
                                id="dateRealRevicion" placeholder="Fecha de revicion real"
                                name="dateRealRevicion" value="{{ old('dateRealRevicion') }}"
                                autocomplete="dateRealRevicion"
                            >
                            @error('dateRealRevicion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control @error('statusProject') is-invalid @enderror"
                                id="statusProject" value="1"
                                name="statusProject"
                            >
                            @error('statusProject')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Situacion :</h6>
                            <select class="form-control" id="situationproyects_id" name="situationproyects_id">
                                <option value="">--Seleccione Situacion--</option>
                                @foreach ($situationproyects as $situationproyect)
                                    <option value="{{$situationproyect->id}}">{{ old('situationproyect->projectSituation', $situationproyect->projectSituation) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Empresa :</h6>
                            <select class="form-control" id="busines_id" name="busines_id">
                                <option value="">--Seleccione Empresa--</option>
                                @foreach ($busines as $busine)
                                    <option value="{{$busine->id}}">{{ old('busine->rfcBusiness', $busine->rfcBusiness) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Residente :</h6>
                            <select class="form-control" id="residents_id" name="residents_id">
                                <option value="">--Seleccione Residente--</option>
                                @foreach ($residents as $resident)
                                    <option value="{{$resident->id}}">{{ old('resident->residentRegistration', $resident->residentRegistration) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('proyect.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center><input class="btn btn-primary btn-lg" type="submit" value="Save"></center>
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
