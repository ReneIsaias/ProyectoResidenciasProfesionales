@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit resident</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('resident.update', $resident->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Matricula :</h6>
                            <input type="text"
                                class="form-control"
                                id="residentRegistration"
                                placeholder="Matricual Residente"
                                name="residentRegistration"
                                value="{{ old('residentRegistration', $resident->residentRegistration) }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameResident"
                                placeholder="Name Resident"
                                name="nameResident"
                                value="{{ old('nameResident', $resident->nameResident) }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>Firs Last Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="firtsLastnameResident"
                                placeholder="First Lastname Resident"
                                name="firtsLastnameResident"
                                value="{{ old('firtsLastnameResident' , $resident->firtsLastnameResident) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Second Last Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="secondLastnameResident"
                                placeholder="Second Lastname Resident"
                                name="secondLastnameResident"
                                value="{{ old('secondLastnameResident' , $resident->secondLastnameResident) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="text"
                                class="form-control"
                                id="emailResident"
                                placeholder="Email Resident"
                                name="emailResident"
                                value="{{ old('emailResident' , $resident->emailResident) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control"
                                id="phoneResident"
                                placeholder="Phone Resident"
                                name="phoneResident"
                                value="{{ old('phoneResident' , $resident->phoneResident) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Perido :</h6>
                            <input type="text"
                                class="form-control"
                                id="periodResident"
                                placeholder="Period Resident"
                                name="periodResident"
                                value="{{ old('periodResident' , $resident->periodResident) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Direction :</h6>
                            <textarea class="form-control" placeholder="Direction resident" name="addessResidente" id="addessResidente" rows="3">{{ old('addessResidente', $resident->addessResidente) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>City :</h6>
                            <input type="text"
                                class="form-control"
                                id="cityResident"
                                placeholder="City Resident"
                                name="cityResident"
                                value="{{ old('cityResident' , $resident->cityResident) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>C.P. :</h6>
                            <input type="text"
                                class="form-control"
                                id="cpResident"
                                placeholder="C.P. Resident"
                                name="cpResident"
                                value="{{ old('cpResident' , $resident->cpResident) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Careers :</h6>
                            <select class="form-control"  name="careers_id" id="careers_id">
                                @foreach($careers as $career)
                                    <option value="{{ $career->id }}"
                                        @if( $career->careerName ==  $resident->career->careerName )
                                            selected
                                        @endif
                                        >
                                        {{ $career->careerName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Type Safes :</h6>
                            <select class="form-control"  name="typesaves_id" id="typesaves_id">
                                @foreach($typesafes as $typesafe)
                                    <option value="{{ $typesafe->id }}"
                                        @if( $typesafe->safeName ==  $resident->typesafe->safeName )
                                            selected
                                        @endif
                                        >
                                        {{ $typesafe->safeName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Semesters :</h6>
                            <select class="form-control"  name="semesters_id" id="semesters_id">
                                @foreach($semesters as $semester)
                                    <option value="{{ $semester->id }}"
                                        @if( $semester->nameSemester ==  $resident->semester->nameSemester )
                                            selected
                                        @endif
                                        >
                                        {{ $semester->nameSemester }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Study Plans :</h6>
                            <select class="form-control"  name="studyplans_id" id="studyplans_id">
                                @foreach($studyplans as $studyplan)
                                    <option value="{{ $studyplan->id }}"
                                        @if( $studyplan->planStudies ==  $resident->studyplan->planStudies )
                                            selected
                                        @endif
                                        >
                                        {{ $studyplan->planStudies }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Relatives :</h6>
                            <select class="form-control"  name="relatives_id" id="relatives_id">
                                @foreach($relatives as $relative)
                                    <option value="{{ $relative->id }}"
                                        @if( $relative->nameRelative ==  $resident->relative->nameRelative )
                                            selected
                                        @endif
                                        >
                                        {{ $relative->nameRelative }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Type Becas :</h6>
                            <select class="form-control"  name="typebecas_id" id="typebecas_id">
                                @foreach($typebecas as $typebeca)
                                    <option value="{{ $typebeca->id }}"
                                        @if( $typebeca->descriptionBeca ==  $resident->typebeca->descriptionBeca )
                                            selected
                                        @endif
                                        >
                                        {{ $typebeca->descriptionBeca }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusresident1" name="statusResident" class="custom-control-input" value="1"
                                @if ( $resident->statusResident =="1" )
                                    checked
                                @elseif ( old('statusResident')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusresident1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusresident0" name="statusResident" class="custom-control-input" value="0"
                                @if ( $resident->statusResident =="0" )
                                    checked
                                @elseif ( old('statusResident')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusresident0">Inactivo</label>
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
