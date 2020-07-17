@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Editar Empresa</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('busines.update', $busines->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <hr>
                        <br>
                        <div class="form-group">
                            <h6>R.F.C. :</h6>
                            <input type="text"
                                class="form-control @error('rfcBusiness') is-invalid @enderror"
                                id="rfcBusiness" placeholder="RFC of Busines"
                                name="rfcBusiness" value="{{ old('rfcBusiness', $busines->rfcBusiness ) }}"
                                autocomplete="rfcBusiness" required autofocus
                            >
                            @error('rfcBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameBusiness') is-invalid @enderror"
                                id="nameBusiness" placeholder="Name Busines"
                                name="nameBusiness" value="{{ old('nameBusiness', $busines->nameBusiness ) }}"
                                autocomplete="nameBusiness" required
                            >
                            @error('nameBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="email"
                                class="form-control @error('emailBusiness') is-invalid @enderror"
                                id="emailBusiness" placeholder="Email Busines"
                                name="emailBusiness" value="{{ old('emailBusiness', $busines->emailBusiness ) }}"
                                autocomplete="emailBusiness" required
                            >
                            @error('emailBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Mision :</h6>
                            <textarea class="form-control @error('misionBusiness') is-invalid @enderror" required placeholder="Mision of busines" name="misionBusiness" id="misionBusiness" rows="3" autocomplete="misionBusiness" required>{{ old('misionBusiness', $busines->misionBusiness ) }}</textarea>
                            @error('misionBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Direccion :</h6>
                            <textarea class="form-control @error('directionBusiness') is-invalid @enderror" required placeholder="Direction of busines" name="directionBusiness" id="directionBusiness" rows="3" autocomplete="directionBusiness" required>{{ old('directionBusiness', $busines->directionBusiness ) }}</textarea>
                            @error('directionBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Colonia :</h6>
                            <input type="text"
                                class="form-control @error('coloniaBusiness') is-invalid @enderror"
                                id="coloniaBusiness" placeholder="Colonia of busines"
                                name="coloniaBusiness" value="{{ old('coloniaBusiness', $busines->coloniaBusiness ) }}"
                                autocomplete="coloniaBusiness" required
                            >
                            @error('coloniaBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Ciudad :</h6>
                            <input type="text"
                                class="form-control @error('cityBusiness') is-invalid @enderror"
                                id="cityBusiness" placeholder="City of busines"
                                name="cityBusiness" value="{{ old('cityBusiness', $busines->cityBusiness ) }}"
                                autocomplete="cityBusiness" required
                            >
                            @error('cityBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneBusiness') is-invalid @enderror"
                                id="phoneBusiness" placeholder="Phone of busines"
                                name="phoneBusiness" value="{{ old('phoneBusiness', $busines->phoneBusiness ) }}"
                                autocomplete="phoneBusiness" required
                            >
                            @error('phoneBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>C.P. :</h6>
                            <input type="text"
                                class="form-control @error('cpBusiness') is-invalid @enderror"
                                id="cpBusiness" placeholder="C.P. of busines"
                                name="cpBusiness" value="{{ old('cpBusiness', $busines->cpBusiness ) }}"
                                autocomplete="cpBusiness" required
                            >
                            @error('cpBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Persona Responsable :</h6>
                            <input type="text"
                                class="form-control @error('personFirma') is-invalid @enderror"
                                id="personFirma" placeholder="Persona of firm convenant"
                                name="personFirma" value="{{ old('personFirma', $busines->personFirma ) }}"
                                autocomplete="personFirma" required
                            >
                            @error('personFirma')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Puesto :</h6>
                            <select required class="form-control" id="postPerson" name="postPerson">
                                @foreach($posts as $post)
                                    <option value="{{ $post->namePost }}"
                                        @isset( $busines->post->namePost )
                                            @if( $post->namePost ==  $busines->post->namePost )
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
                            <h6>Convenio :</h6>
                            <select class="form-control" name="covenants_id" id="covenants_id">
                                @foreach($covenants as $covenant)
                                    <option value="{{ $covenant->id }}"
                                        @isset( $busines->covenant->convenant )
                                            @if( $covenant->convenant ==  $busines->covenant->convenant )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $covenant->convenant }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Giro :</h6>
                            <select class="form-control" name="turns_id" id="turns_id">
                                @foreach($turns as $turn)
                                    <option value="{{ $turn->id }}"
                                        @isset( $busines->turn->descriptionTurn )
                                            @if( $turn->descriptionTurn ==  $busines->turn->descriptionTurn )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $turn->descriptionTurn }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Sector :</h6>
                            <select class="form-control" name="sectors_id" id="sectors_id">
                                @foreach($sectors as $sector)
                                    <option value="{{ $sector->id }}"
                                        @isset( $busines->sector->descriptionSector )
                                            @if( $sector->descriptionSector ==  $busines->sector->descriptionSector )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $sector->descriptionSector }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusbusines1" name="statusBusines" class="custom-control-input" value="1"
                                @if ( $busines->statusBusines =="1" )
                                    checked
                                @elseif ( old('statusBusines')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusbusines1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusbusines0" name="statusBusines" class="custom-control-input" value="0"
                                @if ( $busines->statusBusines =="0" )
                                    checked
                                @elseif ( old('statusBusines')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusbusines0">Inactivo</label>
                        </div>
                        <p>
                            <h4>Titular</h4>
                            <hr>
                            <div class="form-group">
                                <h6>Nombre :</h6>
                                <input type="text"
                                    class="form-control" id="nameTitular"
                                    placeholder="C.P. of busines" name="nameTitular"
                                    value="{{ $busines->titular->nameTitular }} {{ $busines->titular->firstLastname }} {{ $busines->titular->secondLastname }}"
                                    disabled
                                >
                            </div>
                            <div class="form-group">
                                <h6>Telefono :</h6>
                                <input type="text"
                                    class="form-control" id="phoneTitular"
                                    placeholder="C.P. of busines" name="phoneTitular"
                                    value="{{ $busines->titular->phoneTitular }}"
                                    disabled
                                >
                            </div>
                            <div class="form-group">
                                <h6>Puesto :</h6>
                                <input type="text"
                                    class="form-control" id="postTitular"
                                    placeholder="C.P. of busines" name="postTitular"
                                    value="{{ $busines->titular->post->namePost }}"
                                    disabled
                                >
                            </div>
                            <center>
                                @can('haveaccess','titular.edit')
                                    <a class="btn btn-success" href="{{ route('titular.edit', $busines->titular->id ) }}">Edit</a>
                                @endcan
                            </center>
                            <p>
                            <h4>Usuario</h4>
                            <hr>
                            <div class="form-group">
                                <h6>Nombre :</h6>
                                <input type="text"
                                    class="form-control" id="nameUser"
                                    placeholder="C.P. of busines" name="nameUser"
                                    value="{{ $busines->user->nameUser }} {{ $busines->user->firstLastname }} {{ $busines->user->secondLastname }}"
                                    disabled
                                >
                            </div>
                            <div class="form-group">
                                <h6>Telefono :</h6>
                                <input type="text"
                                    class="form-control" id="phoneuser"
                                    placeholder="C.P. of busines" name="phoneuser"
                                    value="{{ $busines->user->phoneUser }}"
                                    disabled
                                >
                            </div>
                            <div class="form-group">
                                <h6>Email :</h6>
                                <input type="text"
                                    class="form-control" id="emailUser"
                                    placeholder="C.P. of busines" name="emailUser"
                                    value="{{ $busines->user->email }}"
                                    disabled
                                >
                            </div>
                            <center>
                                @can('haveaccess','user.show')
                                    <a class="btn btn-info" href="{{ route('user.show', $busines->user->id ) }}">Show</a>
                                @endcan
                            </center>
                            <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('busines.index') }}">Back</a>
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
