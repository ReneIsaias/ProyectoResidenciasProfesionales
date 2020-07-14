@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Resident</h2></div>
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
                                class="form-control @error('residentRegistration') is-invalid @enderror"
                                id="residentRegistration" placeholder="residentRegistration"
                                name="residentRegistration"
                                value="{{ old('residentRegistration', $resident->residentRegistration) }}"
                                disabled
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
                                class="form-control @error('nameresident') is-invalid @enderror"
                                id="nameresident" placeholder="nameresident"
                                name="nameresident"
                                value="{{ $resident->nameResident }} {{ $resident->firtsLastnameResident }} {{ $resident->secondLastnameResident }}"
                                disabled
                            >
                            @error('nameresident')
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
                                value="{{ old('emailResident' , $resident->emailResident) }}"
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
                                value="{{ old('phoneResident' , $resident->phoneResident) }}"
                                disabled
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
                                id="periodResident" placeholder="periodResident"
                                name="periodResident"
                                value="{{ old('periodResident' , $resident->periodResident) }}"
                                disabled
                            >
                            @error('periodResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Direction :</h6>
                            <textarea disabled  class="form-control @error('directionResident') is-invalid @enderror" placeholder="Direction resident" name="directionResident" id="directionResident" rows="3">{{ old('directionResident', $resident->directionResident) }}</textarea>
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
                                id="cityResident" placeholder="cityResident"
                                name="cityResident"
                                value="{{ old('cityResident' , $resident->cityResident) }}"
                                disabled
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
                                id="cpResident" placeholder="cpResident"
                                name="cpResident"
                                value="{{ old('cpResident' , $resident->cpResident) }}"
                                disabled
                            >
                            @error('cpResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Careers :</h6>
                            <select disabled class="form-control" name="careers_id" id="careers_id">
                                @foreach($careers as $career)
                                    <option value="{{ $career->id }}"
                                        @if($career->careerName ==  $resident->career->careerName)
                                            selected
                                        @endif
                                    >
                                        {{ $career->careerName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Type Saves :</h6>
                            <select disabled class="form-control" name="typesaves_id" id="typesaves_id">
                                @foreach($typesafes as $typesafe)
                                    <option value="{{ $typesafe->id }}"
                                        @if($typesafe->safeName ==  $resident->typesafe->safeName)
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
                            <select disabled class="form-control" name="semesters_id" id="semesters_id">
                                @foreach($semesters as $semester)
                                    <option value="{{ $semester->id }}"
                                        @if($semester->nameSemester ==  $resident->semester->nameSemester)
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
                            <select disabled class="form-control" name="studyplans_id" id="studyplans_id">
                                @foreach($studyplans as $studyplan)
                                    <option value="{{ $studyplan->id }}"
                                        @if($studyplan->planStudies ==  $resident->studyplan->planStudies)
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
                            <select disabled class="form-control" name="relatives_id" id="relatives_id">
                                @foreach($relatives as $relative)
                                    <option value="{{ $relative->id }}"
                                        @if($relative->nameRelative ==  $resident->relative->nameRelative)
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
                            <select disabled class="form-control" name="typebecas_id" id="typebecas_id">
                                @foreach($typebecas as $typebeca)
                                    <option value="{{ $typebeca->id }}"
                                        @if($typebeca->descriptionBeca ==  $resident->typebeca->descriptionBeca)
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
                            <input disabled type="radio" id="statusresident1" name="statusResident" class="custom-control-input" value="1"
                                @if ( $resident->statusResident =="1" )
                                    checked
                                @elseif ( old('statusResident')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusresident1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusresident0" name="statusResident" class="custom-control-input" value="0"
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
                                <a class="btn btn-danger btn-lg" href="{{ route('resident.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','resident.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('resident.edit',$resident->id) }}">Edit</a>
                                    @endcan
                                </center>
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
