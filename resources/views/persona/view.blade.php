@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Estudiante</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('persona.update', $persona->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="form-group">
                            <h6>Matricula:</h6>
                            <input type="text"
                                class="form-control @error('id') is-invalid @enderror"
                                id="id" placeholder="Matricula del estudiante"
                                name="id" value="{{ old('id', $persona->id ) }}"
                                autocomplete="id" autofocus required disabled
                            >
                            @error('id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nombrePersona') is-invalid @enderror"
                                id="nombrePersona" placeholder="Nombre del estudiante"
                                name="nombrePersona" value="{{ $persona->nombrePersona }} {{ $persona->apeUnoPersona }} {{ $persona->apeDosPersona }}"
                                autocomplete="nombrePersona" required disabled
                            >
                            @error('nombrePersona')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Semestre :</h6>
                            <input type="number"
                                class="form-control @error('semestrePersona') is-invalid @enderror"
                                id="semestrePersona" placeholder="Semestre del estudiante"
                                name="semestrePersona" value="{{ old('semestrePersona', $persona->semestrePersona ) }}"
                                autocomplete="semestrePersona" required disabled
                            >
                            @error('semestrePersona')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Grupo :</h6>
                            <input type="number"
                                class="form-control @error('grupoPersona') is-invalid @enderror"
                                id="grupoPersona" placeholder="Grupo del estudiante"
                                name="grupoPersona" value="{{ old('grupoPersona', $persona->grupoPersona ) }}"
                                autocomplete="grupoPersona" required disabled
                            >
                            @error('grupoPersona')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h6>Genero :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="generoPersona1" name="generoPersona" class="custom-control-input" value="H"
                                @if ( $persona->generoPersona =="H" )
                                    checked
                                @elseif ( old('generoPersona')=="H" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="generoPersona1">HOMBRE</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="generoPersona0" name="generoPersona" class="custom-control-input" value="M"
                                @if ( $persona->generoPersona =="M" )
                                    checked
                                @elseif ( old('generoPersona')=="M" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="generoPersona0">MUJER</label>
                        </div>
                        <p>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusPersona1" name="statusPersona" class="custom-control-input" value="1"
                                @if ( $persona->statusPersona =="1" )
                                    checked
                                @elseif ( old('statusPersona')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusPersona1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusPersona0" name="statusPersona" class="custom-control-input" value="0"
                                @if ( $persona->statusPersona =="0" )
                                    checked
                                @elseif ( old('statusPersona')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusPersona0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','persona.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('persona.index') }}">Estudiantes</a>
                                @endcan
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','persona.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('persona.edit',$persona->id) }}">Editar</a>
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
