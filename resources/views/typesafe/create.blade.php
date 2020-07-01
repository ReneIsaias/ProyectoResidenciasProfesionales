@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Type Save</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('typesafe.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('safeName') is-invalid @enderror"
                                id="safeName" placeholder="Nombre del tipo de seguro"
                                name="safeName" value="{{ old('safeName') }}"
                                autocomplete="safeName" autofocus required
                            >
                            @error('safeName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control @error('descriptionSafe') is-invalid @enderror" required placeholder="Descripcion del tipo de seguro" name="descriptionSafe" id="descriptionSafe" rows="3">{{ old('descriptionSafe') }}</textarea>
                            @error('descriptionSafe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control" id="statusSafe"
                                value="1" name="statusSafe"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('typesafe.index') }}">Back</a>
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
