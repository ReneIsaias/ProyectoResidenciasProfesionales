@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Usuario</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <br>
                        <center>
                            <h4>{{ $user->name }}</h4>
                            <br>
                            <img width="50%" src="{{ Storage::url( $user->avatar ) }}" alt="Usuario">
                        </center>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>Nombre :</h6>
                                <input id="nameUser" type="text"class="form-control
                                    @error('nameUser') is-invalid @enderror"
                                    name="nameUser" value="{{ $user->nameUser }} {{ $user->firstLastname }} {{ $user->secondLastname }}"
                                    required autocomplete="nameUser" placeholder="Name of user"
                                    disabled
                                >
                                @error('nameUser')
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
                                    required autocomplete="phoneUser" placeholder="Number phone of user"
                                    disabled
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
                                <h6>E-Mail Address :</h6>
                                <input id="email" type="email" class="form-control
                                    @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email', $user->email) }}"
                                    required autocomplete="email" placeholder="Email address of user"
                                    disabled
                                >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <h6>Rol :</h6>
                            <select disabled class="form-control"  name="roles" id="roles">
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
                        <div class="form-group">
                            <h6>Descripción :</h6>
                            <textarea class="form-control @error('descriptionRole') is-invalid @enderror" disabled name="descriptionRole" id="descriptionRole" rows="3">{{ $user->roles[0]->description }}</textarea>
                            @error('descriptionRole')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Puesto :</h6>
                            <select disabled class="form-control"  name="roles" id="roles">
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
                            <h6>Nivel de Estudios :</h6>
                            <select disabled class="form-control"  name="roles" id="roles">
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
                            <select disabled class="form-control"  name="roles" id="roles">
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
                        <div disabled class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio"
                                id="statusUser1"
                                name="statusUser"
                                class="custom-control-input"
                                value="1"
                                @if ( $user->statusUser =="1" )
                                    checked
                                @elseif ( old('statusUser')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusUser1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio"
                                id="statusUser0"
                                name="statusUser"
                                class="custom-control-input"
                                value="0"
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
                                <center>
                                    @can('view', [$user, ['user.edit','userown.edit'] ])
                                        <a class="btn btn-success btn-lg" href="{{ route('user.edit',$user->id) }}">Editar</a>
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
