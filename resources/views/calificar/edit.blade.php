@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Editar Calificación</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('calificar.update', $calificar->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <br>
                        <div class="form-group">
                            <h4>Proyecto</h4>
                            @can('haveaccess','user.edit')
                                <div class="form-group">
                                    <h6>Nombre :</h6>
                                    <select required class="form-control" id="proyect_id" name="proyect_id">
                                        @foreach($proyects as $proyect)
                                            <option value="{{ $proyect->id }}"
                                                @isset( $calificar->proyect->nameProyect )
                                                    @if( $proyect->name ==  $calificar->proyect->nameProyect )
                                                        selected
                                                    @endif
                                                @endisset
                                                >
                                                {{ $proyect->nameProyect }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            @endcan
                            <hr>
                            <div class="form-group">
                                <h6>Nombre :</h6>
                                <input type="text"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="Nombre del proyecto"
                                    name="email" disabled
                                    @isset( $calificar->proyects->id )
                                        value="{{ $calificar->proyects->nameProyect }}"
                                    @endisset
                                >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="form-group">
                                    <h6>Descripción :</h6>
                                    <textarea class="form-control @error('descriptionCalification') is-invalid @enderror" disabled required placeholder="Descripcion de la calificación" name="descriptionCalification" id="descriptionCalification" rows="3" autocomplete="descriptionCalification" required>@isset( $calificar->proyects->id ){{ $calificar->proyects->descriptionProyect }} @endisset</textarea>
                                    @error('descriptionCalification')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            @can('haveaccess','proyect.edit')
                                @isset( $calificar->proyects->id )
                                    <center><a class="btn btn-success" href="{{ route('proyect.edit',$calificar->proyects->id ) }}">Modificar</a></center>
                                @endisset
                            @endcan
                            <br>
                            <h4>Usuario</h4>
                            @can('haveaccess','user.edit')
                                <div class="form-group">
                                    <h6>Nombre :</h6>
                                    <select required class="form-control" id="user_id" name="user_id">
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}"
                                                @isset( $calificar->user->name )
                                                    @if( $user->name ==  $calificar->user->name )
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
                            <hr>
                            <div class="form-group">
                                <h6>Nombre :</h6>
                                <input type="text"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="Nombre completo del usuario"
                                    name="email" disabled
                                    @isset( $calificar->users->id )
                                        value="{{ $calificar->users->nameUser }} {{ $calificar->users->firstLastname }} {{ $calificar->users->secondLastname }}"
                                    @endisset
                                >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h6>User :</h6>
                                <input type="text"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="Nombre de usuario"
                                    name="email" disabled
                                    @isset( $calificar->users->id )
                                        value="{{ $calificar->users->name }}"
                                    @endisset
                                >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h6>Email :</h6>
                                <input type="text"
                                    class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="Email del usuario"
                                    name="email" disabled
                                    @isset( $calificar->users->id )
                                        value="{{ $calificar->users->email }}"
                                    @endisset
                                >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            @can('haveaccess','user.edit')
                                @isset( $calificar->users->id )
                                    <center><a class="btn btn-success" href="{{ route('user.edit',$calificar->users->id ) }}">Modificar</a></center>
                                @endisset
                            @endcan
                            <br>
                            <h4>Evaluación</h4>
                            <hr>
                            <div class="form-group">
                                <h6>Calificacion :</h6>
                                <input type="number"
                                    class="form-control @error('calification') is-invalid @enderror"
                                    id="calification" placeholder="Calificaion"
                                    name="calification" value="{{ old('calification', $calificar->calification ) }}"
                                    autocomplete="calification" required
                                >
                                @error('calification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <h6>Descripción :</h6>
                                <textarea class="form-control @error('descriptionCalification') is-invalid @enderror" required placeholder="Descripcion de la calificación" name="descriptionCalification" id="descriptionCalification" rows="3" autocomplete="descriptionCalification" required>{{ old('descriptionCalification', $calificar->descriptionCalification ) }}</textarea>
                                @error('descriptionCalification')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','calificar.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('calificar.index') }}">Atras</a>
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
