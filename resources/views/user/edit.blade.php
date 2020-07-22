@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Editar Perfil</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <br>
                        <center>
                            <img width="40%" src="{{ Storage::url( $user->avatar ) }}" alt="Usuario">
                        </center>
                        <div>
                            <center><h6>Cambiar avatar :</h6></center>
                            <center><input type="file" name="avatar"></center>
                        </div>
                        <h3>Datos requeridos </h3>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>Clave :</h6>
                                <input id="keyUser" type="text" class="form-control
                                    @error('keyUser') is-invalid @enderror"
                                    name="keyUser" value="{{ old('keyUser', $user->keyUser ) }}"
                                    required autocomplete="keyUser" placeholder="Clave del usuario"
                                    autofocus
                                >
                                @error('keyUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4">
                                <h6>Nombre :</h6>
                                <input id="nameUser" type="text"class="form-control
                                    @error('nameUser') is-invalid @enderror"
                                    name="nameUser" value="{{ old('nameUser', $user->nameUser ) }}"
                                    required autocomplete="nameUser" placeholder="Nombre del usuario"
                                >
                                @error('nameUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <h6>Primer apellido:</h6>
                                <input id="firstLastname" type="text" class="form-control
                                    @error('firstLastname') is-invalid @enderror"
                                    name="firstLastname" value="{{ old('firstLastname', $user->firstLastname ) }}"
                                    required autocomplete="firstLastname" placeholder="Primer apellido del usuario"
                                >
                                @error('firstLastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <h6>Segundo apellido :</h6>
                                <input id="secondLastname" type="text" class="form-control
                                    @error('secondLastname') is-invalid @enderror"
                                    name="secondLastname" value="{{ old('secondLastname', $user->secondLastname ) }}"
                                    required autocomplete="secondLastname" placeholder="Segundo apellido del usuario"
                                >
                                @error('secondLastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>Telefono :</h6>
                                <input id="phoneUser" type="text" class="form-control
                                    @error('phoneUser') is-invalid @enderror"
                                    name="phoneUser" value="{{ old('phoneUser', $user->phoneUser ) }}"
                                    required autocomplete="phoneUser" placeholder="Numero telefonico del usuario"
                                >
                                @error('phoneUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>Usuario :</h6>
                                <input id="name" type="text" class="form-control
                                    @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name', $user->name ) }}"
                                    required autocomplete="name" placeholder="Nombre de identificacion del usuario"
                                >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>E-Mail Address :</h6>
                                <input id="email" type="email" class="form-control
                                    @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email', $user->email) }}"
                                    required autocomplete="email" placeholder="Direccion de correo electronico del usuario"
                                >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @can('haveaccess','user.edit')
                            <div class="form-group">
                                <h6>Rol :</h6>
                                <select class="form-control"  name="roles" id="roles">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}"
                                            @isset( $user->roles[0]->name )
                                                @if( $role->name ==  $user->roles[0]->name )
                                                    selected
                                                @endif
                                            @endisset
                                            >
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        @endcan
                        <div class="form-group">
                            <h6>Puesto :</h6>
                            <select class="form-control"  name="posts_id" id="posts_id">
                                @foreach($posts as $post)
                                    <option value="{{ $post->id }}"
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
                            <h6>Nivel de estudios :</h6>
                            <select class="form-control"  name="degrestudies_id" id="degrestudies_id">
                                @foreach($degrestudys as $degrestudy)
                                    <option value="{{ $degrestudy->id }}"
                                        @isset( $user->degrestudy->degreeStudy )
                                            @if( $degrestudy->degreeStudy ==  $user->degrestudy->degreeStudy )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $degrestudy->degreeStudy }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Carrera :</h6>
                            <select class="form-control"  name="careers_id" id="careers_id">
                                @foreach($careers as $career)
                                    <option value="{{ $career->id }}"
                                        @isset( $user->career->careerName )
                                            @if( $career->careerName ==  $user->career->careerName )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $career->careerName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusUser1"
                                name="statusUser" class="custom-control-input" value="1"
                                @if ( $user->statusUser =="1" )
                                    checked
                                @elseif ( old('statusUser')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusUser1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusUser0"
                                name="statusUser" class="custom-control-input" value="0"
                                @if ( $user->statusUser =="0" )
                                    checked
                                @elseif ( old('statusUser')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusUser0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','user.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('user.index') }}">Usuarios</a>
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
