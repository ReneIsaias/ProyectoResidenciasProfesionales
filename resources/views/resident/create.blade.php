@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Resident</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('resident.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Matricula :</h6>
                            <input type="text"
                                class="form-control @error('residentRegistration') is-invalid @enderror"
                                id="residentRegistration" placeholder="Matricula del residente"
                                name="residentRegistration" value="{{ old('residentRegistration') }}"
                                autocomplete="residentRegistration" required autofocus
                            >
                            @error('residentRegistration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('nameResident') is-invalid @enderror"
                                id="nameResident" placeholder="Name resident"
                                name="nameResident" value="{{ old('nameResident') }}"
                                autocomplete="nameResident" required
                            >
                            @error('nameResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>First Last Name :</h6>
                            <input type="text"
                                class="form-control @error('firtsLastnameResident') is-invalid @enderror"
                                id="firtsLastnameResident" placeholder="First Lastname"
                                name="firtsLastnameResident" value="{{ old('firtsLastnameResident') }}"
                                autocomplete="firtsLastnameResident" required
                            >
                            @error('firtsLastnameResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Second Last Name :</h6>
                            <input type="text"
                                class="form-control @error('secondLastnameResident') is-invalid @enderror"
                                id="secondLastnameResident" placeholder="Second Lastname"
                                name="secondLastnameResident" value="{{ old('secondLastnameResident') }}"
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
                                id="emailResident" placeholder="Email residente"
                                name="emailResident" value="{{ old('emailResident') }}"
                                autocomplete="emailResident" required
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
                                id="phoneResident" placeholder="Telefono residente"
                                name="phoneResident" value="{{ old('phoneResident') }}"
                                autocomplete="phoneResident" required
                            >
                            @error('phoneResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Period :</h6>
                            <input type="text"
                                class="form-control @error('periodResident') is-invalid @enderror"
                                id="periodResident" placeholder="Periode residente"
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
                            <h6>Direction :</h6>
                            <textarea class="form-control @error('directionResident') is-invalid @enderror" placeholder="Direction of resident" name="directionResident" id="directionResident" rows="3">{{ old('directionResident') }}</textarea>
                            @error('directionResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>City :</h6>
                            <input type="text"
                                class="form-control @error('cityResident') is-invalid @enderror"
                                id="cityResident" placeholder="City resident"
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
                                id="cpResident" placeholder="C.P. resident"
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
                                <option value="">--Seleccione la carrera--</option>
                                @foreach ($careers as $career)
                                    <option value="{{ $career->id }}">{{ old('career->careerName', $career->careerName) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Tipo de Seguro :</h6>
                            <select required class="form-control" id="typesaves_id" name="typesaves_id">
                                <option value="">--Seleccione el Tipo de Seguro--</option>
                                @foreach ($typesafes as $typesafe)
                                    <option value="{{ $typesafe->id }}">{{ old('typesafe->safeName', $typesafe->safeName) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Semestre :</h6>
                            <select required class="form-control" id="semesters_id" name="semesters_id">
                                <option value="">--Seleccione el Semestre--</option>
                                @foreach ($semesters as $semester)
                                    <option value="{{ $semester->id }}">{{ old('semester->nameSemester', $semester->nameSemester) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Plan Estudios :</h6>
                            <select required class="form-control" id="studyplans_id" name="studyplans_id">
                                <option value="">--Seleccione el Plan de Estudios--</option>
                                @foreach ($studyplans as $studyplan)
                                    <option value="{{ $studyplan->id }}">{{ old('studyplan->planStudies', $studyplan->planStudies) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Familiar :</h6>
                            <select required class="form-control" id="relatives_id" name="relatives_id">
                                <option value="">--Seleccione El familiar--</option>
                                @foreach ($relatives as $relative)
                                    <option value="{{ $relative->id }}">{{ old('relative->nameRelative', $relative->nameRelative) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Tipo De beca :</h6>
                            <select required class="form-control" id="typebecas_id" name="typebecas_id">
                                <option value="">--Seleccione Tipo de Beca--</option>
                                @foreach ($typebecas as $typebeca)
                                    <option value="{{ $typebeca->id }}">{{ old('typebeca->descriptionBeca', $typebeca->descriptionBeca) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('resident.index') }}">Back</a>
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
