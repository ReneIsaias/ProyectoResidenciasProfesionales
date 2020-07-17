@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Registro Familiar</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('relative.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <hr>
                        <br>
                        <div class="form-group">
                            <h6>Residente:</h6>
                            <input type="text"
                                class="form-control"
                                id="residente" placeholder="Nombre del residente"
                                name="residente" value="{{ Auth::user()->nameUser }} {{ Auth::user()->firstLastname }} {{ Auth::user()->secondLastname }}"
                                autocomplete="residente" autofocus disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameRelative') is-invalid @enderror"
                                id="nameRelative" placeholder="Nombre del familiar"
                                name="nameRelative" value="{{ old('nameRelative') }}"
                                autocomplete="nameRelative" autofocus required
                            >
                            @error('nameRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Primer Apellido :</h6>
                            <input type="text"
                                class="form-control @error('firstLastname') is-invalid @enderror"
                                id="firstLastname" placeholder="Primer apellido del familiar"
                                name="firstLastname" value="{{ old('firstLastname') }}"
                                autocomplete="firstLastname" required
                            >
                            @error('firstLastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Segundo Apellido :</h6>
                            <input type="text"
                                class="form-control @error('secondLastname') is-invalid @enderror"
                                id="secondLastname" placeholder="Segundo apellido del familiar"
                                name="secondLastname" value="{{ old('secondLastname') }}"
                                autocomplete="secondLastname" required
                            >
                            @error('secondLastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Parentesco :</h6>
                            <select required class="form-control" id="typefamilies_id" name="typefamilies_id">
                                <option value="">--Seleccione el parentesco--</option>
                                @foreach ($typefamilys as $typefamily)
                                    <option value="{{ $typefamily->id }}">{{ old('typefamily->descriptionType', $typefamily->descriptionType) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneRelative') is-invalid @enderror"
                                id="phoneRelative" placeholder="Numero de telefono del familiar"
                                name="phoneRelative" value="{{ old('phoneRelative') }}"
                                autocomplete="phoneRelative" required
                            >
                            @error('phoneRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Direccion :</h6>
                            <textarea class="form-control @error('directionRelative') is-invalid @enderror" placeholder="Direccion del familiar" name="directionRelative" id="directionRelative" rows="3" required>{{ old('directionRelative') }}</textarea>
                            @error('directionRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control" id="statusRelative"
                                value="1" name="statusRelative"
                            >
                        </div>
                        <hr>
                        <center><input class="btn btn-primary btn-lg" type="submit" value="Next"></center>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
