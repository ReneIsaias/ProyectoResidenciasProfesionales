@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Empresa</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('busines.update', $busines->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h4>{{ $busines->nameBusiness }}</h4>
                        <hr>
                        <div class="form-group">
                            <h6>R.F.C :</h6>
                            <input type="text"
                                class="form-control" id="rfcBusiness"
                                placeholder="RFC of Busines" name="rfcBusiness"
                                value="{{ old('rfcBusiness', $busines->rfcBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="email"
                                class="form-control" id="emailBusiness"
                                placeholder="Email Busines" name="emailBusiness"
                                value="{{ old('emailBusiness', $busines->emailBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Mision :</h6>
                            <textarea disabled class="form-control" placeholder="Mision of busines" name="misionBusiness" id="misionBusiness" rows="3">{{ old('misionBusiness', $busines->misionBusiness ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Dirección :</h6>
                            <textarea disabled class="form-control" placeholder="Direction of busines" name="directionBusiness" id="directionBusiness" rows="3">{{ old('directionBusiness', $busines->directionBusiness ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Colonia :</h6>
                            <input type="text"
                                class="form-control" id="coloniaBusiness"
                                placeholder="Colonia of busines" name="coloniaBusiness"
                                value="{{ old('coloniaBusiness', $busines->coloniaBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Ciudad :</h6>
                            <input type="text"
                                class="form-control" id="cityBusiness"
                                placeholder="City of busines" name="cityBusiness"
                                value="{{ old('cityBusiness', $busines->cityBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control" id="phoneBusiness"
                                placeholder="Phone of busines" name="phoneBusiness"
                                value="{{ old('phoneBusiness', $busines->phoneBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>C.P. :</h6>
                            <input type="text"
                                class="form-control" id="cpBusiness"
                                placeholder="C.P. of busines" name="cpBusiness"
                                value="{{ old('cpBusiness', $busines->cpBusiness ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Persona responsable :</h6>
                            <input type="text"
                                class="form-control" id="personFirma"
                                placeholder="Persona of firm convenat" name="personFirma"
                                value="{{ old('personFirma', $busines->personFirma ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Puesto de la persona responsable :</h6>
                            <select disabled class="form-control" name="postPerson" id="postPerson">
                                @foreach($posts as $post)
                                    <option value="{{ $post->namePost }}"
                                        @if($post->namePost ==  $busines->namePost)
                                            selected
                                        @endif
                                    >
                                        {{ $post->namePost }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Convenio :</h6>
                            <select disabled class="form-control" name="covenants_id" id="covenants_id">
                                @foreach($covenants as $covenant)
                                    <option value="{{ $covenant->id }}"
                                        @if($covenant->convenant ==  $busines->covenant->convenant)
                                            selected
                                        @endif
                                    >
                                        {{ $covenant->convenant }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Giro :</h6>
                            <select disabled class="form-control" name="turns_id" id="turns_id">
                                @foreach($turns as $turn)
                                    <option value="{{ $turn->id }}"
                                        @if($turn->descriptionTurn ==  $busines->turn->descriptionTurn)
                                            selected
                                        @endif
                                    >
                                        {{ $turn->descriptionTurn }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Sector :</h6>
                            <select disabled class="form-control" name="sectors_id" id="sectors_id">
                                @foreach($sectors as $sector)
                                    <option value="{{ $sector->id }}"
                                        @if($sector->descriptionSector ==  $busines->sector->descriptionSector)
                                            selected
                                        @endif
                                    >
                                        {{ $sector->descriptionSector }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusbusines1" name="statusBusines" class="custom-control-input" value="1"
                                @if ( $busines->statusBusines =="1" )
                                    checked
                                @elseif ( old('statusBusines')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusbusines1">Activa</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusbusines0" name="statusBusines" class="custom-control-input" value="0"
                                @if ( $busines->statusBusines =="0" )
                                    checked
                                @elseif ( old('statusBusines')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusbusines0">Inactiva</label>
                        </div>
                        <p><br>
                        <h4>Titular</h4>
                        <hr>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameTitular') is-invalid @enderror"
                                id="nameTitular" placeholder="nameTitular"
                                name="nameTitular" disabled
                                value="{{ $busines->titular->nameTitular }} {{ $busines->titular->firstLastname }} {{ $busines->titular->secondLastname }}"
                            >
                            @error('nameTitular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Puesto :</h6>
                            <select disabled class="form-control"  name="posts_id" id="posts_id">
                                @foreach($posts as $post)
                                    <option value="{{ $post->id }}"
                                        @isset( $titular->post->namePost )
                                            @if( $post->namePost ==  $busines->titular->post->namePost )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $post->namePost }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneTitular') is-invalid @enderror"
                                id="phoneTitular" placeholder="phoneTitular"
                                name="phoneTitular" disabled
                                value="{{ old('phoneTitular' , $busines->titular->phoneTitular) }}"
                            >
                            @error('phoneTitular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @can('haveaccess','titular.show')
                            <center><a class="btn btn-info" href="{{ route('titular.show',$busines->titular->id) }}">Mostrar</a></center>
                        @endcan
                        <p>
                        <h4>Residente</h4>
                        <hr>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameUser') is-invalid @enderror"
                                id="nameUser" placeholder="nameUser"
                                name="nameUser" disabled
                                value="{{ $busines->user->nameUser }} {{ $busines->user->firstLastname }} {{ $busines->user->secondLastname }}"
                            >
                            @error('nameUser')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="text"
                                class="form-control @error('email') is-invalid @enderror"
                                id="email" placeholder="email"
                                name="email" disabled
                                value="{{ old('email' , $busines->user->email ) }}"
                            >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneUser') is-invalid @enderror"
                                id="phoneUser" placeholder="phoneUser"
                                name="phoneUser" disabled
                                value="{{ old('phoneUser' , $busines->user->phoneUser) }}"
                            >
                            @error('phoneUser')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @can('haveaccess','user.show')
                            <center><a class="btn btn-info" href="{{ route('user.show',$busines->user->id) }}">Mostrar</a></center>
                        @endcan
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','busines.index')
                                    <center><a class="btn btn-danger btn-lg" href="{{ route('busines.index') }}">Empresas</a></center>
                                @endcan
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','busines.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('busines.edit',$busines->id) }}">Editar</a>
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
