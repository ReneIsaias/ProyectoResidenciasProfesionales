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
<<<<<<< HEAD
                        <h4>{{ $resident->residentRegistration }}</h4>
                        <br>
=======
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
<<<<<<< HEAD
                                class="form-control @error('nameResident') is-invalid @enderror"
                                id="nameResident" placeholder="emailResident"
                                name="nameResident"
=======
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
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                                value="{{ $resident->nameResident }} {{ $resident->firtsLastnameResident }} {{ $resident->secondLastnameResident }}"
                                disabled
                            >
                            @error('nameResident')
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
<<<<<<< HEAD
                            <h6>Dirección :</h6>
=======
                            <h6>Direccion :</h6>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
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
<<<<<<< HEAD
                            <h6>Descripción :</h6>
                            <textarea disabled  class="form-control @error('descripctionSafe') is-invalid @enderror" name="descripctionSafe" id="descripctionSafe" rows="2">{{ $resident->typesafe->descriptionSafe }}</textarea>
                            @error('descripctionSafe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
=======
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
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
<<<<<<< HEAD
                            <h6>Descripción :</h6>
                            <textarea disabled  class="form-control @error('descripctionPlan') is-invalid @enderror" name="descripctionPlan" id="descripctionPlan" rows="2">{{ $resident->studyplan->descriptionPlan }}</textarea>
                            @error('descripctionPlan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
=======
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
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
<<<<<<< HEAD
                        <hr>
                        <h4>Familiar</h4>
                        <hr>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameRelative') is-invalid @enderror"
                                id="nameRelative" placeholder="Nombre del familiar" name="nameRelative"
                                value="{{ $resident->relative->nameRelative }} {{ $resident->relative->firstLastname }} {{ $resident->relative->secondLastname }}"
                                autocomplete="nameRelative" autofocus disabled required
                            >
                            @error('nameRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Parentesco :</h6>
                            <select disabled class="form-control"  name="typefamilies_id" id="typefamilies_id">
                                @foreach($typefamilys as $typefamily)
                                    <option value="{{ $typefamily->id }}"
                                        @isset( $resident->relative->typefamily->descriptionType )
                                            @if( $typefamily->descriptionType ==  $resident->relative->typefamily->descriptionType )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $typefamily->descriptionType }}
                                    </option>
                                @endforeach
                            </select>
=======
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
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneRelative') is-invalid @enderror"
<<<<<<< HEAD
                                id="phoneRelative" placeholder="Numero de telefono del familiar"
                                name="phoneRelative" value="{{ old('phoneRelative', $resident->relative->phoneRelative ) }}"
                                autocomplete="phoneRelative" required disabled
                            >
                            @error('phoneRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Dirección :</h6>
                            <textarea class="form-control @error('directionRelative') is-invalid @enderror" disabled placeholder="Direccion del familiar" name="directionRelative" id="directionRelative" rows="3" required>{{ old('directionRelative', $resident->relative->directionRelative ) }}</textarea>
                            @error('directionRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <center>
                            @can('haveaccess','relative.show')
                                <a class="btn btn-info" href="{{ route('relative.show', $resident->relative->id ) }}">Mostrar</a>
                            @endcan
                        </center>
                        <hr>
                        @can('haveaccess','asesor.view')
                            <h3>Asesores</h3>
                            <hr>
                            @foreach( $useres as $user )
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" disabled class="custom-control-input"
                                        id="users_{{ $user->id }}"
                                        value="{{ $user->id }}" name="users[]"
                                        @if( is_array(old('users')) && in_array("$user->id", old('users')) )
                                            checked
                                        @elseif( is_array($resident_user) && in_array("$user->id", $resident_user) )
                                            checked
                                        @endif
                                    >
                                    <label class="custom-control-label"
                                        for="users_{{ $user->id }}">
                                        {{ $user->id }}
                                        -
                                        {{ $user->nameUser }} {{ $user->firstLastname }} {{ $user->secondLastname }}
                                        <em>( {{ $user->name }} )</em>
                                        <h6>Telefono :</h6>
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control @error('phoneRelative') is-invalid @enderror"
                                                id="phoneRelative" placeholder="Numero de telefono del familiar"
                                                name="phoneRelative" value="{{ $user->phoneUser }}"
                                                autocomplete="phoneRelative" disabled
                                            >
                                        </div>
                                        <h6>Email :</h6>
                                        <div class="form-group">
                                            <input type="text"
                                                class="form-control @error('phoneRelative') is-invalid @enderror"
                                                id="phoneRelative" placeholder="Numero de telefono del familiar"
                                                name="phoneRelative" value="{{ $user->email }}"
                                                autocomplete="phoneRelative" disabled
                                            >
                                        </div>
                                    </label>
                                </div>
                            @endforeach
                            <hr>
                        @endcan
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('resident.index') }}">Residentes</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','resident.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('resident.edit',$resident->id) }}">Editar</a>
                                    @endcan
                                </center>
=======
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
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
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
