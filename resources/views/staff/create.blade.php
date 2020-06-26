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
                                class="form-control"
                                id="residentRegistration"
                                placeholder="Resident matricula"
                                name="residentRegistration"
                                value="{{ old('residentRegistration') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameResident"
                                placeholder="Name resident"
                                name="nameResident"
                                value="{{ old('nameResident') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>First Last Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="firtsLastnameResident"
                                placeholder="First Lastname"
                                name="firtsLastnameResident"
                                value="{{ old('firtsLastnameResident') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Second Last Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="secondLastnameResident"
                                placeholder="Second Lastname"
                                name="secondLastnameResident"
                                value="{{ old('secondLastnameResident') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="email"
                                class="form-control"
                                id="emailResident"
                                placeholder="Email resident"
                                name="emailResident"
                                value="{{ old('emailResident') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control"
                                id="phoneResident"
                                placeholder="Phone resident"
                                name="phoneResident"
                                value="{{ old('phoneResident') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Period :</h6>
                            <input type="text"
                                class="form-control"
                                id="periodResident"
                                placeholder="Period resident"
                                name="periodResident"
                                value="{{ old('periodResident') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Address :</h6>
                            <textarea class="form-control" placeholder="Address of resident" name="addessResidente" id="addessResidente" rows="3">{{ old('addessResidente') }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>City :</h6>
                            <input type="text"
                                class="form-control"
                                id="cityResident"
                                placeholder="City resident"
                                name="cityResident"
                                value="{{ old('cityResident') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>C.P. :</h6>
                            <input type="text"
                                class="form-control"
                                id="cpResident"
                                placeholder="C.P. resident"
                                name="cpResident"
                                value="{{ old('cpResident') }}"
                            >
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control"
                                id="statusResident"
                                value="1"
                                name="statusResident"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Career :</h6>
                            <select class="form-control"
                                id="careers_id"
                                name="careers_id">
                                <option value="">--Seleccione career--</option>
                                @foreach ($careers as $career)
                                    <option value="{{$career->id}}">{{ old('career->careerName', $career->careerName) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Semester :</h6>
                            <select class="form-control"
                                id="semesters_id"
                                name="semesters_id">
                                <option value="">--Seleccione semester--</option>
                                @foreach ($semesters as $semester)
                                    <option value="{{$semester->id}}">{{ old('semester->nameSemester', $semester->nameSemester) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Type beca :</h6>
                            <select class="form-control"
                                id="typebecas_id"
                                name="typebecas_id">
                                <option value="">--Seleccione typebeca--</option>
                                @foreach ($typebecas as $typebeca)
                                    <option value="{{$typebeca->id}}">{{ old('typebeca->descriptionBeca', $typebeca->descriptionBeca) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Type safe :</h6>
                            <select class="form-control"
                                id="typesaves_id"
                                name="typesaves_id">
                                <option value="">--Seleccione typesafe--</option>
                                @foreach ($typesafes as $typesafe)
                                    <option value="{{$typesafe->id}}">{{ old('typesafe->safeName', $typesafe->safeName) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Study plan :</h6>
                            <select class="form-control"
                                id="studyplans_id"
                                name="studyplans_id">
                                <option value="">--Seleccione studyplan--</option>
                                @foreach ($studyplans as $studyplan)
                                    <option value="{{$studyplan->id}}">{{ old('studyplan->planStudies', $studyplan->planStudies) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Relative :</h6>
                            <select class="form-control"
                                id="relatives_id"
                                name="relatives_id">
                                <option value="">--Seleccione relative--</option>
                                @foreach ($relatives as $relative)
                                    <option value="{{$relative->id}}">{{ old('relative->nameRelative', $relative->nameRelative) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('resident.index') }}">Back</a>
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
