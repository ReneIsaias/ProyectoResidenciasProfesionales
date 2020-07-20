@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Editar Estudiante</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('persona.update', $persona->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <hr>
                        <br>
                        <div class="form-group">
                            <h6>Matricula:</h6>
                            <input type="text"
                                class="form-control @error('id') is-invalid @enderror"
                                id="id" placeholder="Matricula del estudiante"
                                name="id" value="{{ old('id', $persona->id ) }}"
                                autocomplete="id" autofocus required
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
                                name="nombrePersona" value="{{ old('nombrePersona', $persona->nombrePersona ) }}"
                                autocomplete="nombrePersona" required
                            >
                            @error('nombrePersona')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Primer Apellido :</h6>
                            <input type="text"
                                class="form-control @error('apeUnoPersona') is-invalid @enderror"
                                id="apeUnoPersona" placeholder="Primer apellido del estudiante"
                                name="apeUnoPersona" value="{{ old('apeUnoPersona', $persona->apeUnoPersona ) }}"
                                autocomplete="apeUnoPersona" required
                            >
                            @error('apeUnoPersona')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Segundo Apellido :</h6>
                            <input type="text"
                                class="form-control @error('apeDosPersona') is-invalid @enderror"
                                id="apeDosPersona" placeholder="Segundo apellido del estudiante"
                                name="apeDosPersona" value="{{ old('apeDosPersona', $persona->apeDosPersona ) }}"
                                autocomplete="apeDosPersona" required
                            >
                            @error('apeDosPersona')
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
                                autocomplete="semestrePersona" required
                            >
                            @error('semestrePersona')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Grupo :</h6>
                            <input type="text"
                                class="form-control @error('grupoPersona') is-invalid @enderror"
                                id="grupoPersona" placeholder="Grupo del estudiante"
                                name="grupoPersona" value="{{ old('grupoPersona', $persona->grupoPersona ) }}"
                                autocomplete="grupoPersona" required
                            >
                            @error('grupoPersona')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h6>Genero :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input  type="radio" id="generoPersona1" name="generoPersona" class="custom-control-input" value="H"
                                @if ( $persona->generoPersona =="H" )
                                    checked
                                @elseif ( old('generoPersona')=="H" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="generoPersona1">HOMBRE</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input  type="radio" id="generoPersona0" name="generoPersona" class="custom-control-input" value="M"
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
                            <input  type="radio" id="statusPersona1" name="statusPersona" class="custom-control-input" value="1"
                                @if ( $persona->statusPersona =="1" )
                                    checked
                                @elseif ( old('statusPersona')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusPersona1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input  type="radio" id="statusPersona0" name="statusPersona" class="custom-control-input" value="0"
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
                                <a class="btn btn-danger btn-lg" href="{{ route('persona.index') }}">Back</a>
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
