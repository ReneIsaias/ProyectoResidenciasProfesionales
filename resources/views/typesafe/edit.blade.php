@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Type Save</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('typesafe.update', $typesafe->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('safeName') is-invalid @enderror"
                                id="safeName" placeholder="Nombre del tipo de seguro"
                                name="safeName" value="{{ old('safeName', $typesafe->safeName ) }}"
                                autocomplete="safeName" required
                            >
                            @error('safeName')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control @error('descriptionSafe') is-invalid @enderror" placeholder="Descripcion del tipo de seguro" name="descriptionSafe" id="descriptionSafe" rows="3" required>{{ old('descriptionSafe', $typesafe->descriptionSafe ) }}</textarea>
                            @error('descriptionSafe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="typesafeStatus1" name="statusSafe" class="custom-control-input" value="1"
                                @if ( $typesafe->statusSafe =="1" )
                                    checked
                                @elseif ( old('statusSafe')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="typesafeStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="typesafeStatus0" name="statusSafe" class="custom-control-input" value="0"
                                @if ( $typesafe->statusSafe =="0" )
                                    checked
                                @elseif ( old('statusSafe')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="typesafeStatus0">Inactivo</label>
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
