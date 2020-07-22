@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Editar Residente</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('resident.update', $resident->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Datos requeridos</h3>
<<<<<<< HEAD
=======
                        <hr>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
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
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameResident') is-invalid @enderror"
                                id="nameResident" placeholder="Nombre del residente"
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
                            <h6>Primer apellido :</h6>
                            <input type="text"
                                class="form-control @error('firtsLastnameResident') is-invalid @enderror"
                                id="firtsLastnameResident" placeholder="Primer apellido del residente"
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
                            <h6>Segundo apellido :</h6>
                            <input type="text"
                                class="form-control @error('secondLastnameResident') is-invalid @enderror"
                                id="secondLastnameResident" placeholder="Segundo apellido del residente"
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
                                id="emailResident" placeholder="Direccion de correo electronico del residente"
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
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneResident') is-invalid @enderror"
                                id="phoneResident" placeholder="Numero telefonico del residente"
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
                            <h6>Periodo :</h6>
                            <input type="text"
                                class="form-control @error('periodResident') is-invalid @enderror"
                                id="periodResident" placeholder="Periodo del residente"
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
<<<<<<< HEAD
                            <h6>Dirección :</h6>
                            <textarea class="form-control @error('directionResident') is-invalid @enderror" placeholder="Direccion de ubicación del residente" name="directionResident" id="directionResident" rows="3">{{ old('directionResident', $resident->directionResident ) }}</textarea>
=======
                            <h6>Direccion :</h6>
                            <textarea class="form-control @error('directionResident') is-invalid @enderror" placeholder="Direction of resident" name="directionResident" id="directionResident" rows="3">{{ old('directionResident', $resident->directionResident ) }}</textarea>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                            @error('directionResident')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <h6>Ciudad :</h6>
=======
                            <h6>Ciudad:</h6>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                            <input type="text"
                                class="form-control @error('cityResident') is-invalid @enderror"
                                id="cityResident" placeholder="Ciudad del residente a la que pertenece"
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
                                id="cpResident" placeholder="Codigo postal del residente"
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
                            <h6>Seguro :</h6>
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
<<<<<<< HEAD
                            <h6>Plan de estudios :</h6>
=======
                            <h6>Plan de Estudios :</h6>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
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
<<<<<<< HEAD
                            <h6>Beca :</h6>
=======
                            <h6>Tipo De beca :</h6>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
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
                        <p>
<<<<<<< HEAD
                        <h4>Familiar</h4>
                        <hr>
                        @can('haveaccess','relative.edit')
                            <div class="form-group">
                                <h6>Familiar :</h6>
                                <select class="form-control" name="relatives_id" id="relatives_id">
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
                        @endcan
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameRelative') is-invalid @enderror"
                                id="nameRelative" placeholder="Nombre del familiar" name="nameRelative"
                                value="{{ $resident->relative->nameRelative }} {{ $resident->relative->firstLastname }} {{ $resident->relative->secondLastname }}"
                                autocomplete="nameRelative" disabled
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
                                autocomplete="phoneRelative" disabled
                            >
                            @error('phoneRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Dirección :</h6>
                            <textarea disabled class="form-control @error('directionRelative') is-invalid @enderror" placeholder="Direccion del familiar" name="directionRelative" id="directionRelative" rows="3">{{ old('directionRelative', $resident->relative->directionRelative ) }}</textarea>
                            @error('directionRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <center>
                            @can('haveaccess','relative.edit')
                                <a class="btn btn-success" href="{{ route('relative.edit', $resident->relative->id ) }}">Modificar</a>
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
                        @can('haveaccess','relative.edit')
                            <center><a class="btn btn-success" href="{{ route('relative.edit',$resident->relative->id) }}">Edit</a></center>
                        @endcan
                        <p>
                        <h4>Asesor Interno</h4>
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
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                        <hr>
                        @can('haveaccess','asesor.view')
                            <h3>Asesores</h3>
                            <hr>
                            @foreach( $useres as $user )
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" disabled class="custom-control-input"
                                        id="useres_{{ $user->id }}"
                                        value="{{ $user->id }}" name="useres[]"
                                        @if( is_array(old('useres')) && in_array("$user->id", old('useres')) )
                                            checked
                                        @elseif( is_array($resident_user) && in_array("$user->id", $resident_user) )
                                            checked
                                        @endif
                                    >
                                    <label class="custom-control-label"
                                        for="useres_{{ $user->id }}">
                                        {{ $user->id }}
                                        -
                                        {{ $user->nameUser }} {{ $user->firstLastname }} {{ $user->secondLastname }}
                                        <em>( {{ $user->name }} )</em>
                                    </label>
                                </div>
                            @endforeach
                            <hr>
                        @endcan
                        @can('haveaccess','asesor.edit')
                            <h5>Asesor Externo :</h5>
                            <div class="form-group">
                                <select class="form-control"  name="asesor[]" id="asesor[]">
                                    <option value="">--Seleccione al asesor externo--</option>
                                    @foreach ($useres as $user)
                                        <option value="{{ $user->id }}">{{ $user->nameUser }} {{ $user->firstLastname }} {{ $user->secondLastname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <h5>Asesor Interno :</h5>
                                <select class="form-control"  name="asesor[]" id="asesor[]">
                                    <option value="">--Seleccione al asesor interno--</option>
                                    @foreach ($useres as $user)
                                        <option value="{{ $user->id }}">{{ $user->nameUser }} {{ $user->firstLastname }} {{ $user->secondLastname }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                        @endcan
                        <br>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','resident.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('resident.index') }}">Residentes</a>
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
