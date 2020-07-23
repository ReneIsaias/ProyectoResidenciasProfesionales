@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Registro Residente</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('resident.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <hr>
<<<<<<< HEAD
=======
                        <br>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                        <div class="form-group">
                            <h6>Matricula :</h6>
                            <input type="text"
                                class="form-control @error('residentRegistration') is-invalid @enderror"
                                id="residentRegistration" placeholder="Matricula del residente"
                                name="residentRegistration" value="{{ old('residentRegistration', Auth::user()->keyUser ) }}"
                                autocomplete="residentRegistration" required autofocus
                            >
                            @error('residentRegistration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameResident') is-invalid @enderror"
                                id="nameResident" placeholder="Nombre del residente"
<<<<<<< HEAD
                                name="nameResident" value="{{ old('nameResident', Auth::user()->nameUser ) }}"
=======
                                name="nameResident" value="{{ old('nameResident') }}"
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                                autocomplete="nameResident" required
                            >
                            @error('nameResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <h6>Primer apellido :</h6>
                            <input type="text"
                                class="form-control @error('firtsLastnameResident') is-invalid @enderror"
                                id="firtsLastnameResident" placeholder="Primer apellido del residente"
                                name="firtsLastnameResident" value="{{ old('firtsLastnameResident', Auth::user()->firstLastname ) }}"
=======
                            <h6>Primer Apellido :</h6>
                            <input type="text"
                                class="form-control @error('firtsLastnameResident') is-invalid @enderror"
                                id="firtsLastnameResident" placeholder="Primer apellido del residente"
                                name="firtsLastnameResident" value="{{ old('firtsLastnameResident') }}"
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                                autocomplete="firtsLastnameResident" required
                            >
                            @error('firtsLastnameResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <h6>Segundo apellido :</h6>
                            <input type="text"
                                class="form-control @error('secondLastnameResident') is-invalid @enderror"
                                id="secondLastnameResident" placeholder="Segundo apellido del residente"
                                name="secondLastnameResident" value="{{ old('secondLastnameResident', Auth::user()->secondLastname ) }}"
=======
                            <h6>Segundo Apellido :</h6>
                            <input type="text"
                                class="form-control @error('secondLastnameResident') is-invalid @enderror"
                                id="secondLastnameResident" placeholder="Segundo apellido del residente"
                                name="secondLastnameResident" value="{{ old('secondLastnameResident') }}"
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                                autocomplete="secondLastnameResident" required
                            >
                            @error('secondLastnameResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="email"
                                class="form-control @error('emailResident') is-invalid @enderror"
<<<<<<< HEAD
                                id="emailResident" placeholder="Direccion de correo electronico del residente"
                                name="emailResident" value="{{ old('emailResident', Auth::user()->email ) }}"
=======
                                id="emailResident" placeholder="Correo electronico del residente"
                                name="emailResident" value="{{ old('emailResident') }}"
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                                autocomplete="emailResident" required
                            >
                            @error('emailResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneResident') is-invalid @enderror"
<<<<<<< HEAD
                                id="phoneResident" placeholder="Numero de telfono del residente"
                                name="phoneResident" value="{{ old('phoneResident', Auth::user()->phoneUser ) }}"
=======
                                id="phoneResident" placeholder="Telefono del residente"
                                name="phoneResident" value="{{ old('phoneResident') }}"
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                                autocomplete="phoneResident" required
                            >
                            @error('phoneResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Periodo :</h6>
                            <input type="text"
                                class="form-control @error('periodResident') is-invalid @enderror"
<<<<<<< HEAD
                                id="periodResident" placeholder="Periodo del residente"
=======
                                id="periodResident" placeholder="Periodo que cursa el residente"
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                                name="periodResident" value="{{ old('periodResident') }}"
                                autocomplete="periodResident" required
                            >
                            @error('periodResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <h6>Dirección :</h6>
                            <textarea class="form-control @error('directionResident') is-invalid @enderror" placeholder="Dirección de la ubicación del residente" name="directionResident" id="directionResident" rows="3">{{ old('directionResident') }}</textarea>
=======
                            <h6>Direccion :</h6>
                            <textarea class="form-control @error('directionResident') is-invalid @enderror" placeholder="Direccion del residente" name="directionResident" id="directionResident" rows="3">{{ old('directionResident') }}</textarea>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                            @error('directionResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Ciudad :</h6>
                            <input type="text"
                                class="form-control @error('cityResident') is-invalid @enderror"
<<<<<<< HEAD
                                id="cityResident" placeholder="Ciudad del residente"
=======
                                id="cityResident" placeholder="Ciudad donde vive el residente"
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                                name="cityResident" value="{{ old('cityResident') }}"
                                autocomplete="cityResident" required
                            >
                            @error('cityResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>C.P. :</h6>
                            <input type="text"
                                class="form-control @error('cpResident') is-invalid @enderror"
<<<<<<< HEAD
                                id="cpResident" placeholder="Codigo postal del residente"
=======
                                id="cpResident" placeholder="Codigo postal de la ciudad del residente"
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                                name="cpResident" value="{{ old('cpResident') }}"
                                autocomplete="cpResident" required
                            >
                            @error('cpResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control @error('periodResident') is-invalid @enderror"
                                id="statusResident" value="1"
                                name="statusResident"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Carrera :</h6>
                            <select required class="form-control" id="careers_id" name="careers_id">
                                <option value="">--Seleccione su carrera--</option>
                                @foreach ($careers as $career)
                                    <option value="{{ $career->id }}">{{ old('career->careerName', $career->careerName) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Tipo de Seguro :</h6>
                            <select required class="form-control" id="typesaves_id" name="typesaves_id">
                                <option value="">--Seleccione su tipo de seguro--</option>
                                @foreach ($typesafes as $typesafe)
                                    <option value="{{ $typesafe->id }}">{{ old('typesafe->safeName', $typesafe->safeName) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Semestre :</h6>
                            <select required class="form-control" id="semesters_id" name="semesters_id">
                                <option value="">--Seleccione su semestre--</option>
                                @foreach ($semesters as $semester)
                                    <option value="{{ $semester->id }}">{{ old('semester->nameSemester', $semester->nameSemester) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Plan Estudios :</h6>
                            <select required class="form-control" id="studyplans_id" name="studyplans_id">
                                <option value="">--Seleccione su plan de estudios--</option>
                                @foreach ($studyplans as $studyplan)
                                    <option value="{{ $studyplan->id }}">{{ old('studyplan->planStudies', $studyplan->planStudies) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <h6>Tipo De beca :</h6>
                            <select required class="form-control" id="typebecas_id" name="typebecas_id">
                                <option value="">--Seleccione Tipo de Beca--</option>
                                @foreach ($typebecas as $typebeca)
                                    <option value="{{ $typebeca->id }}">{{ old('typebeca->descriptionBeca', $typebeca->descriptionBeca) }}</option>
=======
                            <h6>Tipo De Beca :</h6>
                            <select required class="form-control" id="typebecas_id" name="typebecas_id">
                                <option value="">--Seleccione su tipo de beca--</option>
                                @foreach ($typebecas as $typebeca)
                                    <option value="{{ $typebeca->id }}">{{ old('typebeca->descriptionBeca', $typebeca->descriptionBeca) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Familiar :</h6>
                            <select class="form-control" id="relatives_id" name="relatives_id">
                                <option value="">--Seleccione su familiar--</option>
                                @foreach ($relatives as $relative)
                                    <option value="{{ $relative->id }}">{{ old('relative->nameRelative', $relative->nameRelative) }}</option>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control @error('relatives_id') is-invalid @enderror"
                                id="relatives_id" name="relatives_id"
                                @foreach($relatives as $relative)
                                    value="{{ $relative->id }}"
                                @endforeach
                                >
                            @error('relatives_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <hr>
<<<<<<< HEAD
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','resident.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('resident.index') }}">Residentes</a>
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
