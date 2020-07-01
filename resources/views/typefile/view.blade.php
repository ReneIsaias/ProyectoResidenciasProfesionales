@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Type File</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('typefile.update', $typefile->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <input type="text"
                                class="form-control @error('descriptionFile') is-invalid @enderror"
                                id="descriptionFile" placeholder="Descripcion del tipo de archivo"
                                name="descriptionFile" value="{{ old('descriptionFile', $typefile->descriptionFile ) }}"
                                autocomplete="descriptionFile" autofocus disabled required
                            >
                            @error('descriptionFile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Created :</h6>
                            <input type="text"
                                class="form-control" id="created_at"
                                placeholder="created_at" name="created_at "
                                value="{{ old('created_at' , $typefile->created_at ) }}"
                                disabled
                            >
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="typefileStatus1" name="statusFile" class="custom-control-input" value="1"
                                @if ( $typefile->statusFile =="1" )
                                    checked
                                @elseif ( old('statusFile')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="typefileStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="typefileStatus0" name="statusFile" class="custom-control-input" value="0"
                                @if ( $typefile->statusFile =="0" )
                                    checked
                                @elseif ( old('statusFile')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="typefileStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('typefile.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','typefile.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('typefile.edit',$typefile->id) }}">Edit</a>
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
