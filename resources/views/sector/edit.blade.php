@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Sector</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('sector.update', $sector->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('descriptionSector') is-invalid @enderror"
                                id="descriptionSector" placeholder="Descripcion del sector"
                                name="descriptionSector" value="{{ old('descriptionSector', $sector->descriptionSector ) }}"
                                autocomplete="descriptionSector" autofocus required
                            >
                            @error('descriptionSector')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sectorStatus1" name="statusSector" class="custom-control-input" value="1"
                                @if ( $sector->statusSector =="1" )
                                    checked
                                @elseif ( old('statusSector')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="sectorStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="sectorStatus0" name="statusSector" class="custom-control-input" value="0"
                                @if ( $sector->statusSector =="0" )
                                    checked
                                @elseif ( old('statusSector')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="sectorStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('sector.index') }}">Back</a>
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
