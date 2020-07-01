@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Career</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('career.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Clave :</h6>
                            <input type="text"
                                class="form-control @error('keyCareer') is-invalid @enderror"
                                id="keyCareer" placeholder="Clave de la carrera"
                                name="keyCareer" value="{{ old('keyCareer') }}"
                                autocomplete="keyCareer" required autofocus
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
                                name="careerName" value="{{ old('careerName') }}"
                                autocomplete="careerName" required
                            >
                            @error('careerName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control" id="careerStatus"
                                value="1" name="careerStatus"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('career.index') }}">Back</a>
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
