@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Registro Estudiante</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('persona.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <hr>
                        <div class="form-group">
                            <h6>Matricula:</h6>
                            <input type="text"
                                class="form-control @error('id') is-invalid @enderror"
                                id="id" placeholder="Matricula del estudiante"
                                name="id" value="{{ old('id') }}"
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
                                name="nombrePersona" value="{{ old('nombrePersona') }}"
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
                                name="apeUnoPersona" value="{{ old('apeUnoPersona') }}"
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
                                name="apeDosPersona" value="{{ old('apeDosPersona') }}"
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
                                name="semestrePersona" value="{{ old('semestrePersona') }}"
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
                                name="grupoPersona" value="{{ old('grupoPersona') }}"
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
                            <input type="radio" id="generoPersona1" name="generoPersona" class="custom-control-input" value="H"
                            >
                            <label class="custom-control-label" for="generoPersona1">Hombre</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="generoPersona0" name="generoPersona" class="custom-control-input" value="M"
                            >
                            <label class="custom-control-label" for="generoPersona0">Mujer</label>
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control" id="statusPersona"
                                value="0" name="statusPersona"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','persona.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('persona.index') }}">Estudiantes</a>
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
