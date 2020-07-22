@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
<<<<<<< HEAD
                <center><div class="card-header bg-dark text-white"><h2>Registrar Proyecto</h2></div></center>
=======
                <div class="card-header bg-dark text-white"><h2>Registro Proyecto</h2></div>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('proyect.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Datos requeridos</h3>
<<<<<<< HEAD
                        <hr>
=======
                        <br>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
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
                            <h6>Descripción :</h6>
                            <textarea class="form-control @error('descriptionProyect') is-invalid @enderror" required placeholder="Descripcion del proyecto a realizar" name="descriptionProyect" id="descriptionProyect" rows="3">{{ old('descriptionProyect') }}</textarea>
                            @error('descriptionProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Objetivo general :</h6>
                            <textarea class="form-control @error('objGeneProyect') is-invalid @enderror" required placeholder="Un objetivo general con respecto al desarrollo del proyecto" name="objGeneProyect" id="objGeneProyect" rows="3">{{ old('objGeneProyect') }}</textarea>
                            @error('objGeneProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Objetivo Especifico :</h6>
                            <textarea class="form-control @error('objEspeciProyect') is-invalid @enderror" required placeholder="Un objetivo especifico relacionado al proyecto a realizar" name="objEspeciProyect" id="objEspeciProyect" rows="3">{{ old('objEspeciProyect') }}</textarea>
                            @error('objEspeciProyect')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Justficaciòn :</h6>
                            <textarea class="form-control @error('JustifyProject') is-invalid @enderror" required placeholder="Una descripcion de la justificaciòn en el desarrollo de este proyecto" name="JustifyProject" id="JustifyProject" rows="3">{{ old('JustifyProject') }}</textarea>
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
                        {{-- <div class="form-group">
                            <h6>Calificacion :</h6>
                            <input type="number"
                                class="form-control @error('qualificationProyect') is-invalid @enderror"
                                id="qualificationProyect" placeholder="Calificacion del proyecto"
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
                                placeholder="Descripcion de revicion del proyecto" name="revisionProyect"
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
                        </div>     --}}
                        <div class="form-group">
                            <h6>Horario :</h6>
                            <input type="text"
                                class="form-control @error('hourlyProyect') is-invalid @enderror"
                                id="hourlyProyect" placeholder="Dias en los que se realizara el desarrollo del proyecto"
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
                            <input type="hidden"
                                class="form-control @error('situationproyects_id') is-invalid @enderror"
                                id="situationproyects_id" name="situationproyects_id"
                                @foreach($situationproyects as $situationproyect)
                                    value="{{ $situationproyect->id }}"
                                @endforeach
                                >
                            @error('situationproyects_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control @error('busines_id') is-invalid @enderror"
                                id="busines_id" name="busines_id"
                                @foreach($busines as $busine)
                                    value="{{ $busine->id }}"
                                @endforeach
                                >
                            @error('busines_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control @error('residents_id') is-invalid @enderror"
                                id="residents_id"
                                name="residents_id"
                                @foreach($residents as $resident)
                                    value="{{ $resident->id }}"
                                @endforeach
                                >
                            >
                            @error('residents_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <hr>
<<<<<<< HEAD
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','proyect.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('proyect.index') }}">Proyectos</a>
                                @endcan
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center><input class="btn btn-primary btn-lg" type="submit" value="Siguiente"></center>
                            </div>
=======
                        <center><input class="btn btn-primary btn-lg" type="submit" value="Next"></center>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
