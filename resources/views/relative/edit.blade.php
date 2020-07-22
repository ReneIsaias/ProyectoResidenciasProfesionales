@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Editar Familiar</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('relative.update', $relative->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <hr>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameRelative') is-invalid @enderror"
                                id="nameRelative" placeholder="Nombre del familiar"
                                name="nameRelative" value="{{ old('nameRelative', $relative->nameRelative ) }}"
                                autocomplete="nameRelative" autofocus required
                            >
                            @error('nameRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Primer apellido :</h6>
                            <input type="text"
                                class="form-control @error('firstLastname') is-invalid @enderror"
                                id="firstLastname" placeholder="Primer apellido del familiar"
                                name="firstLastname" value="{{ old('firstLastname', $relative->firstLastname ) }}"
                                autocomplete="firstLastname" required
                            >
                            @error('firstLastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Segundo apellido :</h6>
                            <input type="text"
                                class="form-control @error('secondLastname') is-invalid @enderror"
                                id="secondLastname" placeholder="Segundo apellido del familiar"
                                name="secondLastname" value="{{ old('secondLastname', $relative->secondLastname ) }}"
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
                            <select class="form-control"  name="typefamilies_id" id="typefamilies_id">
                                @foreach($typefamilys as $typefamily)
                                    <option value="{{ $typefamily->id }}"
                                        @isset( $relative->typefamily->descriptionType )
                                            @if( $typefamily->descriptionType ==  $relative->typefamily->descriptionType )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $typefamily->descriptionType }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneRelative') is-invalid @enderror"
                                id="phoneRelative" placeholder="Numero de telefono del familiar"
                                name="phoneRelative" value="{{ old('phoneRelative' , $relative->phoneRelative) }}"
                                autocomplete="phoneRelative" required
                            >
                            @error('phoneRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Dirección :</h6>
                            <textarea class="form-control @error('directionRelative') is-invalid @enderror" placeholder="Direccion del familiar" name="directionRelative" id="directionRelative" rows="3" required>{{ old('directionRelative', $relative->directionRelative ) }}</textarea>
                            @error('directionRelative')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusRelative1" name="statusRelative" class="custom-control-input" value="1"
                                @if ( $relative->statusRelative =="1" )
                                    checked
                                @elseif ( old('statusRelative')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusRelative1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusRelative0" name="statusRelative" class="custom-control-input" value="0"
                                @if ( $relative->statusRelative =="0" )
                                    checked
                                @elseif ( old('statusRelative')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusRelative0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','relative.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('relative.index') }}">Familiares</a>
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
