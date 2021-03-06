@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Situation Proyect</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('situationproyect.update', $situationproyect->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('projectSituation') is-invalid @enderror"
                                id="projectSituation" placeholder="Nombre de la situacion del proyecto"
                                name="projectSituation" value="{{ old('projectSituation', $situationproyect->projectSituation ) }}"
                                autocomplete="projectSituation" autofocus disabled required
                            >
                            @error('projectSituation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control @error('descriptionSituation') is-invalid @enderror" disabled required placeholder="Descripcion de la situacion del proyecto" name="descriptionSituation" id="descriptionSituation" rows="3">{{ old('descriptionSituation', $situationproyect->descriptionSituation ) }}</textarea>
                            @error('descriptionSituation')
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
                                value="{{ old('created_at' , $situationproyect->created_at ) }}"
                                disabled
                            >
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="situationproyectStatus1" name="statusSituation" class="custom-control-input" value="1"
                                @if ( $situationproyect->statusSituation =="1" )
                                    checked
                                @elseif ( old('statusSituation')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="situationproyectStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="situationproyectStatus0" name="statusSituation" class="custom-control-input" value="0"
                                @if ( $situationproyect->statusSituation =="0" )
                                    checked
                                @elseif ( old('statusSituation')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="situationproyectStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('situationproyect.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','situationproyect.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('situationproyect.edit',$situationproyect->id) }}">Edit</a>
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
