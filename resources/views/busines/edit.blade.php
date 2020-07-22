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
                        <br>
                        <div class="form-group">
                            <h6>R.F.C. :</h6>
                            <input type="text"
                                class="form-control @error('rfcBusiness') is-invalid @enderror"
                                id="rfcBusiness" placeholder="RFC de la empresa"
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
                                id="nameBusiness" placeholder="Nombre de la empresa"
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
                                id="emailBusiness" placeholder="Correo electronico de la empresa"
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
                            <textarea class="form-control @error('misionBusiness') is-invalid @enderror" required placeholder="Mision de la empresa" name="misionBusiness" id="misionBusiness" rows="3" autocomplete="misionBusiness" required>{{ old('misionBusiness', $busines->misionBusiness ) }}</textarea>
                            @error('misionBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Direcciòn :</h6>
                            <textarea class="form-control @error('directionBusiness') is-invalid @enderror" required placeholder="Direccion de la ubicacion de la empresa " name="directionBusiness" id="directionBusiness" rows="3" autocomplete="directionBusiness" required>{{ old('directionBusiness', $busines->directionBusiness ) }}</textarea>
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
                                id="coloniaBusiness" placeholder="Colonia en la que se encuentra la empresa"
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
                                id="cityBusiness" placeholder="Ciudad n donde esta la empresa"
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
                                id="phoneBusiness" placeholder="Numero de telfono de la empresa"
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
                                id="cpBusiness" placeholder="Codigo postal en donde esta la empresa"
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
                            <h6>Persona responsable :</h6>
                            <input type="text"
                                class="form-control @error('personFirma') is-invalid @enderror"
                                id="personFirma" placeholder="Nombre completo de la persona que firma el acuerdo"
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
                        <p><br>
                        <h4>Titular</h4>
                        <hr>
                        @can('haveaccess','titular.edit')
                            <div class="form-group">
                                <h6>Titular :</h6>
                                <select required class="form-control" id="titulars_id" name="titulars_id">
                                    @foreach($titulars as $titular)
                                        <option value="{{ $titular->id }}"
                                            @isset( $busines->titular->nameTitular )
                                                @if( $titular->nameTitular ==  $busines->titular->nameTitular )
                                                    selected
                                                @endif
                                            @endisset
                                            >
                                            {{ $titular->nameTitular }} {{ $titular->firstLastname }} {{ $titular->secondLastname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endcan
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
                        @can('haveaccess','titular.edit')
                            <center><a class="btn btn-success" href="{{ route('titular.edit',$titular->id) }}">Modificar</a></center>
                        @endcan
                        <p>
                        <h4>Asesor</h4>
                        <hr>
                        @can('haveaccess','user.edit')
                            <div class="form-group">
                                <h6>Nombre :</h6>
                                <select required class="form-control" id="user_id" name="user_id">
                                    @foreach($users as $user)
                                        <option value="{{ $user->id }}"
                                            @isset( $busines->user->name )
                                                @if( $user->name ==  $busines->user->name )
                                                    selected
                                                @endif
                                            @endisset
                                            >
                                            {{ $user->nameUser }} {{ $user->firstLastname }} {{ $user->secondLastname }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endcan
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameUser') is-invalid @enderror"
                                id="nameUser" placeholder="Nombre del asesor"
                                name="nameUser" disabled
                                @isset( $busines->user->name )
                                    value="{{ $busines->user->nameUser }} {{ $busines->user->firstLastname }} {{ $busines->user->secondLastname }}"
                                @endisset
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
                                id="email" placeholder="Correo electronico del asesor"
                                name="email" disabled
                                @isset( $busines->user->email )
                                    value="{{ old('email' , $busines->user->email) }}"
                                @endisset
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
                                id="phoneUser" placeholder="Numero de telefono del asesor"
                                name="phoneUser" disabled
                                @isset( $busines->user->phoneUser )
                                    value="{{ old('phoneUser' ,$busines->user->phoneUser) }}"
                                @endisset
                                value=""
                            >
                            @error('phoneUser')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        @can('haveaccess','user.show')
                            @isset( $busines->user->id )
                                <center><a class="btn btn-success" href="{{ route('user.edit',$busines->user->id) }}">Modificar</a></center>
                            @endisset
                        @endcan
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','busines.index')
                                    <center><a class="btn btn-danger btn-lg" href="{{ route('busines.index') }}">Empresas</a></center>
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
