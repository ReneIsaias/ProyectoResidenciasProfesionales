@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Career</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('career.update', $career->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Clave :</h6>
                            <input type="text"
                                class="form-control @error('keyCareer') is-invalid @enderror"
                                id="keyCareer" placeholder="Clave de la carrera"
                                name="keyCareer" value="{{ old('keyCareer', $career->keyCareer ) }}"
                                autocomplete="keyCareer" disabled autofocus disabled
                            >
                            @error('keyCareer')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('careerName') is-invalid @enderror"
                                id="careerName" placeholder="Nombre de la carrera"
                                name="careerName" value="{{ old('careerName', $career->careerName ) }}"
                                autocomplete="careerName" required disabled
                            >
                            @error('careerName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio"
                                id="careerStatus1" name="careerStatus"
                                class="custom-control-input" value="1"
                                @if ( $career->careerStatus =="1" )
                                    checked
                                @elseif ( old('careerStatus')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="careerStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio"
                                id="careerStatus0"
                                name="careerStatus"
                                class="custom-control-input"
                                value="0"
                                @if ( $career->careerStatus =="0" )
                                    checked
                                @elseif ( old('careerStatus')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="careerStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('career.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','career.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('career.edit',$career->id) }}">Edit</a>
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
