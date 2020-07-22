@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Asignar Calificacion</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('calificar.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <br>
                        <div class="form-group">
                            <h6>Proyecto :</h6>
                            <select required class="form-control"  name="proyect_id" id="proyect_id">
                                <option value="">--Seleccione el nombre del proyecto--</option>
                                @foreach ($proyects as $proyect)
                                    <option value="{{ $proyect->id }}">{{ old('proyect->nameProyect', $proyect->nameProyect) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Calificacion :</h6>
                            <input type="number"
                                class="form-control @error('calification') is-invalid @enderror"
                                id="calification" placeholder="Calificaion"
                                name="calification" value="{{ old('calification') }}"
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
                            <textarea class="form-control @error('descriptionCalification') is-invalid @enderror" required placeholder="Descripcion de la calificación" name="descriptionCalification" id="descriptionCalification" rows="3" autocomplete="descriptionCalification" required>{{ old('descriptionCalification') }}</textarea>
                            @error('descriptionCalification')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control" id="user_id"
                                value="{{ Auth::user()->id }}" name="user_id"
                            >
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
