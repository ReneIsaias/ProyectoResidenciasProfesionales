@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Ver Giro</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('turn.update', $turn->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('descriptionTurn') is-invalid @enderror"
                                id="descriptionTurn" placeholder="Descripcion del giro"
                                name="descriptionTurn" value="{{ old('descriptionTurn', $turn->descriptionTurn ) }}"
                                autocomplete="descriptionTurn" autofocus disabled required
                            >
                            @error('descriptionTurn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Created :</h6>
                            <input type="text"
                                class="form-control"
                                id="created_at" placeholder="created_at"
                                name="created_at" value="{{ old('created_at' , $turn->created_at ) }}"
                                disabled
                            >
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="turnStatus1" name="statusTurn" class="custom-control-input" value="1"
                                @if ( $turn->statusTurn =="1" )
                                    checked
                                @elseif ( old('statusTurn')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="turnStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="turnStatus0" name="statusTurn" class="custom-control-input" value="0"
                                @if ( $turn->statusTurn =="0" )
                                    checked
                                @elseif ( old('statusTurn')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="turnStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('turn.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','turn.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('turn.edit',$turn->id) }}">Edit</a>
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
