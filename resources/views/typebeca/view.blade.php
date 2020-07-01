@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Type Beca</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('typebeca.update', $typebeca->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('descriptionBeca') is-invalid @enderror"
                                id="descriptionBeca" placeholder="Descripcion de la Beca"
                                name="descriptionBeca" value="{{ old('descriptionBeca' , $typebeca->descriptionBeca) }}"
                                autocomplete="descriptionBeca" disabled autofocus
                            >
                            @error('descriptionBeca')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Created :</h6>
                            <input type="text" class="form-control" id="created_at"
                                placeholder="created_at" name="created_at "
                                value="{{ old('created_at' , $typebeca->created_at ) }}"
                                disabled
                            >
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="typebecaStatus1" name="statusBeca" class="custom-control-input" value="1"
                                @if ( $typebeca->statusBeca =="1" )
                                    checked
                                @elseif ( old('statusBeca')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="typebecaStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="typebecaStatus0" name="statusBeca" class="custom-control-input" value="0"
                                @if ( $typebeca->statusBeca =="0" )
                                    checked
                                @elseif ( old('statusBeca')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="typebecaStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('typebeca.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','typebeca.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('typebeca.edit',$typebeca->id) }}">Edit</a>
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
