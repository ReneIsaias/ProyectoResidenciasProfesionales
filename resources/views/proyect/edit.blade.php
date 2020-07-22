@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Editar Proyecto</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('proyect.update', $proyect->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <hr>
                        <div class="form-group">
                            <h6>Clave :</h6>
                            <input type="text"
                                class="form-control @error('keyProyect') is-invalid @enderror"
                                id="keyProyect" placeholder="Clave del proyecto"
                                name="keyProyect" value="{{ old('keyProyect', $proyect->keyProyect ) }}"
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
                            <textarea class="form-control @error('nameProyect') is-invalid @enderror" required placeholder="Nombre del proyecto" name="nameProyect" id="nameProyect" rows="3">{{ old('nameProyect', $proyect->nameProyect ) }}</textarea>
                            @error('nameProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Descripción :</h6>
                            <textarea class="form-control @error('descriptionProyect') is-invalid @enderror" required placeholder="Descripcion del proyecto  " name="descriptionProyect" id="descriptionProyect" rows="3">{{ old('descriptionProyect', $proyect->descriptionProyect ) }}</textarea>
                            @error('descriptionProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Objetivo general :</h6>
                            <textarea class="form-control @error('objGeneProyect') is-invalid @enderror" required placeholder="Objetivo general del proyecto" name="objGeneProyect" id="objGeneProyect" rows="3">{{ old('objGeneProyect', $proyect->objGeneProyect ) }}</textarea>
                            @error('objGeneProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Objetivo especifico :</h6>
                            <textarea class="form-control @error('objEspeciProyect') is-invalid @enderror" required placeholder="Objetivo especifico del proyecto" name="objEspeciProyect" id="objEspeciProyect" rows="3">{{ old('objEspeciProyect', $proyect->objEspeciProyect ) }}</textarea>
                            @error('objEspeciProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Justficación :</h6>
                            <textarea class="form-control @error('JustifyProject') is-invalid @enderror" required placeholder="Justificacion del proyecto" name="JustifyProject" id="JustifyProject" rows="3">{{ old('JustifyProject', $proyect->JustifyProject ) }}</textarea>
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
                                name="dateStart" value="{{ old('dateStart', $proyect->dateStart ) }}"
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
                                name="dateEnd" value="{{ old('dateEnd', $proyect->dateEnd ) }}"
                                autocomplete="dateEnd" required
                            >
                            @error('dateEnd')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @can('haveaccess','proyect.calificar')
                            <div class="form-group">
                                <h6>Calificacion :</h6>
                                <input type="text"
                                    class="form-control @error('qualificationProyect') is-invalid @enderror"
                                    id="qualificationProyect" placeholder="Calificacion asginada al proyecto"
                                    name="qualificationProyect" value="{{ old('qualificationProyect', $proyect->qualificationProyect ) }}"
                                    autocomplete="qualificationProyect"
                                >
                                @error('qualificationProyect')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        @endcan
                        @can('haveaccess','calificar.create')
                            <center><a class="btn btn-info" href="{{ route('calificar.create') }}">Calificar</a></center>
                        @endcan
                        <div class="form-group">
                            <h6>Revicion :</h6>
                            <input type="text"
                                class="form-control @error('revisionProyect') is-invalid @enderror" id="revisionProyect"
                                placeholder="Revicion del proyecto" name="revisionProyect"
                                value="{{ old('revisionProyect', $proyect->revisionProyect ) }}"
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
                                name="dateRevision" value="{{ old('dateRevision', $proyect->dateRevision ) }}"
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
                                id="hourlyProyect" placeholder="Horario del residente en el desarrollo del proyecto"
                                name="hourlyProyect" value="{{ old('hourlyProyect', $proyect->hourlyProyect ) }}"
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
                                name="dateRealRevicion" value="{{ old('dateRealRevicion', $proyect->dateRealRevicion ) }}"
                                autocomplete="dateRealRevicion"
                            >
                            @error('dateRealRevicion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Situación :</h6>
                            <select class="form-control" name="situationproyects_id" id="situationproyects_id">
                                @foreach($situationproyects as $situationproyect)
                                    <option value="{{ $situationproyect->id }}"
                                        @isset( $proyect->situationproyect->projectSituation )
                                            @if( $situationproyect->projectSituation ==  $proyect->situationproyect->projectSituation )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $situationproyect->projectSituation }}
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
                        <br><br>
                        <h4>Empresa</h4>
                        <hr>
                        @can('haveaccess','busines.edit')
                            <div class="form-group">
                                <h6>Nombre :</h6>
                                <select class="form-control" name="busines_id" id="busines_id">
                                    @foreach($busines as $busine)
                                        <option value="{{ $busine->id }}"
                                            @if($busine->rfcBusiness ==  $proyect->busine->rfcBusiness)
                                                selected
                                            @endif
                                            >
                                            {{ $busine->nameBusiness }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endcan
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="email"
                                class="form-control" id="emailBusiness"
                                placeholder="Email Busines" name="emailBusiness"
                                value="{{ old('emailBusiness', $proyect->busine->nameBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>R.F.C :</h6>
                            <input type="text"
                                class="form-control" id="rfcBusiness"
                                placeholder="RFC of Busines" name="rfcBusiness"
                                value="{{ old('rfcBusiness', $proyect->busine->rfcBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="email"
                                class="form-control" id="emailBusiness"
                                placeholder="Email Busines" name="emailBusiness"
                                value="{{ old('emailBusiness', $proyect->busine->emailBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Mision :</h6>
                            <textarea disabled class="form-control" placeholder="Mision of busines" name="misionBusiness" id="misionBusiness" rows="3">{{ old('misionBusiness', $proyect->busine->misionBusiness ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Dirección :</h6>
                            <textarea disabled class="form-control" placeholder="Direction of busines" name="directionBusiness" id="directionBusiness" rows="3">{{ old('directionBusiness', $proyect->busine->directionBusiness ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Colonia :</h6>
                            <input type="text"
                                class="form-control" id="coloniaBusiness"
                                placeholder="Colonia of busines" name="coloniaBusiness"
                                value="{{ old('coloniaBusiness', $proyect->busine->coloniaBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Ciudad :</h6>
                            <input type="text"
                                class="form-control" id="cityBusiness"
                                placeholder="City of busines" name="cityBusiness"
                                value="{{ old('cityBusiness', $proyect->busine->cityBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control" id="phoneBusiness"
                                placeholder="Phone of busines" name="phoneBusiness"
                                value="{{ old('phoneBusiness', $proyect->busine->phoneBusiness ) }}"
                                disabled
                            >
                        </div>
                        @can('haveaccess','busines.edit')
                            <center><a class="btn btn-success" href="{{ route('busines.edit', $proyect->busine->id ) }}">Modificar</a></center>
                        @endcan
                        <h4>Residente</h4>
                        <hr>
                        @can('haveaccess','resident.edit')
                            <div class="form-group">
                                <h6>Residente :</h6>
                                <select class="form-control" name="residents_id" id="residents_id">
                                    @foreach($residents as $resident)
                                        <option value="{{ $resident->id }}"
                                            @if($resident->residentRegistration ==  $proyect->resident->residentRegistration)
                                                selected
                                            @endif
                                            >
                                            {{ $resident->nameResident }} {{ $resident->firtsLastnameResident }} {{ $resident->secondLastnameResident }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endcan
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('nameresident') is-invalid @enderror"
                                id="nameresident" placeholder="nameresident"
                                name="nameresident"
                                value="{{ $proyect->resident->nameResident }} {{ $proyect->resident->firtsLastnameResident }} {{ $proyect->resident->secondLastnameResident }}"
                                disabled
                            >
                            @error('nameresident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Matricula :</h6>
                            <input type="text"
                                class="form-control @error('residentRegistration') is-invalid @enderror"
                                id="residentRegistration" placeholder="residentRegistration"
                                name="residentRegistration"
                                value="{{ old('residentRegistration', $proyect->resident->residentRegistration) }}"
                                disabled
                            >
                            @error('residentRegistration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="text"
                                class="form-control @error('emailResident') is-invalid @enderror"
                                id="emailResident" placeholder="emailResident"
                                name="emailResident"
                                value="{{ old('emailResident' , $proyect->resident->emailResident) }}"
                                disabled
                            >
                            @error('emailResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control @error('phoneResident') is-invalid @enderror"
                                id="phoneResident" placeholder="phoneResident"
                                name="phoneResident"
                                value="{{ old('phoneResident' , $proyect->resident->phoneResident) }}"
                                disabled
                            >
                            @error('phoneResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @can('haveaccess','resident.edit')
                            <center><a class="btn btn-success" href="{{ route('resident.edit', $proyect->resident->id ) }}">Modificar</a></center>
                        @endcan
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','proyect.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('proyect.index') }}">Proyectos</a>
                                @endcan
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center><input class="btn btn-primary btn-lg" type="submit" value="Guardar"></center>
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
