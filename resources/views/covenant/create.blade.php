@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Convenant</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('covenant.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('convenant') is-invalid @enderror"
                                id="convenant" placeholder="Nombre del convenio"
                                name="convenant" value="{{ old('convenant') }}"
                                autocomplete="convenant" required autofocus
                            >
                            @error('convenant')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control @error('descriptionConvenant') is-invalid @enderror" placeholder="Descripción del convenio" name="descriptionConvenant" id="descriptionConvenant" rows="3" autocomplete="descriptionConvenant" required>{{ old('descriptionConvenant') }}</textarea>
                            @error('descriptionConvenant')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control" id="statusConvenant"
                                value="1" name="statusConvenant"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('covenant.index') }}">Back</a>
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
