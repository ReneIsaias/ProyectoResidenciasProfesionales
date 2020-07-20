@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Registrar Empresa</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('busines.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <br>
                        <div class="form-group">
                            <h6>R.F.C. :</h6>
                            <input type="text"
                                class="form-control @error('rfcBusiness') is-invalid @enderror"
                                id="rfcBusiness" placeholder="RFC de la empresa"
                                name="rfcBusiness" value="{{ old('rfcBusiness') }}"
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
                                name="nameBusiness" value="{{ old('nameBusiness') }}"
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
                                name="emailBusiness" value="{{ old('emailBusiness') }}"
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
                            <textarea class="form-control @error('misionBusiness') is-invalid @enderror" required placeholder="Mision de la empresa" name="misionBusiness" id="misionBusiness" rows="3" autocomplete="misionBusiness" required>{{ old('misionBusiness') }}</textarea>
                            @error('misionBusiness')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Dirección :</h6>
                            <textarea class="form-control @error('directionBusiness') is-invalid @enderror" required placeholder="Dirección de la ubicación de la empresa" name="directionBusiness" id="directionBusiness" rows="3" autocomplete="directionBusiness" required>{{ old('directionBusiness') }}</textarea>
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
                                id="coloniaBusiness" placeholder="Colonia en la que esta la empresa"
                                name="coloniaBusiness" value="{{ old('coloniaBusiness') }}"
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
                                id="cityBusiness" placeholder="Ciudad en donde esta ubicada la empresa"
                                name="cityBusiness" value="{{ old('cityBusiness') }}"
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
                                id="phoneBusiness" placeholder="Numero telefonico de la empresa"
                                name="phoneBusiness" value="{{ old('phoneBusiness') }}"
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
                                id="cpBusiness" placeholder="Codigo postal en donde esta ubicada la empresa"
                                name="cpBusiness" value="{{ old('cpBusiness') }}"
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
                                id="personFirma" placeholder="Nombre completo de la persona que firmara el acuerdo"
                                name="personFirma" value="{{ old('personFirma') }}"
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
                            <select required class="form-control"  name="postPerson" id="postPerson">
                                <option value="">--Seleccione el puesto que desempeña la persona responsable--</option>
                                @foreach($posts as $post)
                                    <option value="{{ $post->namePost }}"
                                        @isset( $user->post->namePost )
                                            @if( $post->namePost ==  $user->post->namePost )
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
                            <input type="hidden" class="form-control"
                                id="statusBusines" value="1" name="statusBusines"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Convenio :</h6>
                            <select required class="form-control"  name="covenants_id" id="covenants_id">
                                <option value="">--Seleccione el tipo de convenio--</option>
                                @foreach ($covenants as $covenant)
                                    <option value="{{ $covenant->id }}">{{ old('covenant->convenant', $covenant->convenant) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Giro :</h6>
                            <select required class="form-control" id="turns_id" name="turns_id">
                                <option value="">--Seleccione giro de la empresa--</option>
                                @foreach ($turns as $turn)
                                    <option value="{{$turn->id}}">{{ old('turn->descriptionTurn', $turn->descriptionTurn) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Sector :</h6>
                            <select required class="form-control" id="sectors_id" name="sectors_id">
                                <option value="">--Seleccione sector de la empresa--</option>
                                @foreach ($sectors as $sector)
                                    <option value="{{$sector->id}}">{{ old('sector->descriptionSector', $sector->descriptionSector) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Titular :</h6>
                            <select required class="form-control" name="titulars_id" id="titulars_id">
                                @foreach($titulars as $titular)
                                    <option value="{{ $titular->id }}"
                                    >
                                        {{ $titular->nameTitular }} {{ $titular->firstLastname }} {{ $titular->secondLastname }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Usuario :</h6>
                            <input type="text"
                                class="form-control @error('user_id') is-invalid @enderror"
                                id="user_id" placeholder="Usuario que esta realizando el tramite"
                                name="user_id" value="{{ Auth::user()->id }}"
                                autocomplete="user_id" required
                            >
                            {{ Auth::user()->nameUser }} {{ Auth::user()->firstLastname }} {{ Auth::user()->secondLastname }}
                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','busines.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('busines.index') }}">Empresas</a>
                                @endcan
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center><input class="btn btn-primary btn-lg" type="submit" value="Siguiente"></center>
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
