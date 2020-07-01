@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Type Family</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('typefamily.update', $typefamily->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <input type="text"
                                class="form-control @error('descriptionType') is-invalid @enderror"
                                id="descriptionType" placeholder="Descripcion del tipo de familia"
                                name="descriptionType" value="{{ old('descriptionType', $typefamily->descriptionType ) }}"
                                autocomplete="descriptionType" autofocus required
                            >
                            @error('descriptionType')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="typefamilyStatus1" name="statusType" class="custom-control-input" value="1"
                                @if ( $typefamily->statusType =="1" )
                                    checked
                                @elseif ( old('statusType')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="typefamilyStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="typefamilyStatus0" name="statusType" class="custom-control-input" value="0"
                                @if ( $typefamily->statusType =="0" )
                                    checked
                                @elseif ( old('statusType')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="typefamilyStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('typefamily.index') }}">Back</a>
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
