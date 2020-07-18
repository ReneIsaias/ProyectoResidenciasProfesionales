@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Residente</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('resident.update', $resident->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
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
                            <h6>Nombre :</h6>
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
                            <h6>Telefono :</h6>
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
                            <h6>Periodo :</h6>
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
                            <h6>Direccion :</h6>
                            <textarea disabled  class="form-control @error('directionResident') is-invalid @enderror" placeholder="Direction resident" name="directionResident" id="directionResident" rows="3">{{ old('directionResident', $resident->directionResident) }}</textarea>
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
                            <h6>Carrera :</h6>
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
                            <h6>Seguro :</h6>
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
                            <h6>Semestre :</h6>
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
                            <h6>Plan de estudios :</h6>
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
                            <h6>Beca :</h6>
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
                        <p>
                        <div class="form-group">
                            <h4>Familiar :</h4>
                            <hr><p>
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameRelative') is-invalid @enderror"
                                id="nameRelative" placeholder="nameRelative"
                                name="nameRelative"
                                value="{{ $resident->relative->nameRelative }} {{ $resident->relative->firstLastname }} {{ $resident->relative->secondLastname }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneRelative') is-invalid @enderror"
                                id="phoneRelative" placeholder="phoneRelative"
                                name="phoneRelative"
                                value="{{ $resident->relative->phoneRelative }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Direccion :</h6>
                            <textarea disabled  class="form-control @error('directionRelative') is-invalid @enderror" placeholder="Direction resident" name="directionRelative" id="directionRelative" rows="3">{{ $resident->relative->directionRelative }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Parentesco :</h6>
                            <input type="text"
                                class="form-control @error('descriptionType') is-invalid @enderror"
                                id="descriptionType" placeholder="descriptionType"
                                name="descriptionType"
                                value="{{ $resident->relative->typefamily->descriptionType }}"
                                disabled
                            >
                        </div>
                        <p>
                            <h4>Asesor Interno</h4>
                            <hr>
                            <div class="form-group">
                                <h6>Asesor :</h6>
                                @foreach($users as $user)
                                    <input type="text"
                                        class="form-control"
                                        id="user"
                                        name="user[]"
                                        @if( is_array(old('user')) && in_array("$user->id", old('user')) )
                                            value="{{ $user->name }}"
                                        @elseif( is_array($resident_user) && in_array("$user->id", $resident_user) )
                                            value="{{ $user->email }}"
                                        @endif
                                    >
                                @endforeach
                                <h6>dale</h6>
                                <div class="form-group">
                                    <h6>Asesor :</h6>
                                    <select class="form-control" id="user[]" name="user[]">
                                        <option value="">--Seleccione el asesor--</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }} -> {{ $user->email }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <h6>Haber</h6>
                                <select class="form-control" id="user[]" name="user[]">
                                    <option value="">--Seleccione el asesor--</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }} -> {{ $user->email }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <p>
                            <h4>Asesor Externo</h4>
                            <hr>
                            <div class="form-group">
                                <h6>Asesor :</h6>
                                <select class="form-control" id="user[]" name="user[]">
                                    <option value="">--Seleccione el asesor--</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }} -> {{ $user->email }}</option>
                                    @endforeach
                                </select>
                            </div>
                        <hr>
                        <center>
                            @can('haveaccess','resident.edit')
                                <a class="btn btn-success btn-lg" href="{{ route('resident.edit',$resident->id) }}">Edit</a>
                            @endcan
                        </center>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
