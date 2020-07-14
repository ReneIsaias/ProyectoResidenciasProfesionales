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
                                class="form-control @error('residentRegistration') is-invalid @enderror"
                                id="residentRegistration" placeholder="Matricula del residente"
                                name="residentRegistration" value="{{ old('residentRegistration', $resident->residentRegistration ) }}"
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
                                name="nameResident" value="{{ old('nameResident', $resident->nameResident ) }}"
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
                                name="firtsLastnameResident" value="{{ old('firtsLastnameResident', $resident->firtsLastnameResident ) }}"
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
                                name="secondLastnameResident" value="{{ old('secondLastnameResident', $resident->secondLastnameResident ) }}"
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
                                name="emailResident" value="{{ old('emailResident', $resident->emailResident ) }}"
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
                                name="phoneResident" value="{{ old('phoneResident', $resident->phoneResident ) }}"
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
                                name="periodResident" value="{{ old('periodResident', $resident->periodResident ) }}"
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
                            <textarea class="form-control @error('directionResident') is-invalid @enderror" placeholder="Direction of resident" name="directionResident" id="directionResident" rows="3">{{ old('directionResident', $resident->directionResident ) }}</textarea>
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
                                name="cityResident" value="{{ old('cityResident', $resident->cityResident ) }}"
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
                                name="cpResident" value="{{ old('cpResident', $resident->cpResident ) }}"
                                autocomplete="cpResident" required
                            >
                            @error('cpResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Carrera :</h6>
                            <select class="form-control"  name="careers_id" id="careers_id">
                                @foreach($careers as $career)
                                    <option value="{{ $career->id }}"
                                        @isset( $resident->career->careerName )
                                            @if( $career->careerName ==  $resident->career->careerName )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $career->careerName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Tipo de Seguro :</h6>
                            <select required class="form-control" id="typesaves_id" name="typesaves_id">
                                @foreach($typesafes as $typesafe)
                                    <option value="{{ $typesafe->id }}"
                                        @isset( $resident->typesafe->safeName )
                                            @if( $typesafe->safeName ==  $resident->typesafe->safeName )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $typesafe->safeName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Semestre :</h6>
                            <select required class="form-control" id="semesters_id" name="semesters_id">
                                @foreach($semesters as $semester)
                                    <option value="{{ $semester->id }}"
                                        @isset( $resident->semester->nameSemester )
                                            @if( $semester->nameSemester ==  $resident->semester->nameSemester )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $semester->nameSemester }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Plan Estudios :</h6>
                            <select required class="form-control" id="studyplans_id" name="studyplans_id">
                                @foreach($studyplans as $studyplan)
                                    <option value="{{ $studyplan->id }}"
                                        @isset( $resident->studyplan->planStudies )
                                            @if( $studyplan->planStudies ==  $resident->studyplan->planStudies )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $studyplan->planStudies }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Familiar :</h6>
                            <select required class="form-control" id="relatives_id" name="relatives_id">
                                @foreach($relatives as $relative)
                                    <option value="{{ $relative->id }}"
                                        @isset( $resident->relative->nameRelative )
                                            @if( $relative->nameRelative ==  $resident->relative->nameRelative )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $relative->nameRelative }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Tipo De beca :</h6>
                            <select required class="form-control" id="typebecas_id" name="typebecas_id">
                                @foreach($typebecas as $typebeca)
                                    <option value="{{ $typebeca->id }}"
                                        @isset( $resident->typebeca->descriptionBeca )
                                            @if( $typebeca->descriptionBeca ==  $resident->typebeca->descriptionBeca )
                                                selected
                                            @endif
                                        @endisset
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
