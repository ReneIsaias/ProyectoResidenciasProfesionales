@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Situation Proyect</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('situationproyect.update', $situationproyect->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <div class="form-group">
                            <h6>Name Situation Proyect :</h6>
                            <input type="text"
                                class="form-control"
                                id="projectSituation"
                                placeholder="Project Situation"
                                name="projectSituation"
                                value="{{ old('projectSituation' , $situationproyect->projectSituation) }}"
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <h6>situationproyect Created :</h6>
                            <input type="text"
                                class="form-control"
                                id="created_at"
                                placeholder="created_at"
                                name="created_at "
                                value="{{ old('created_at' , $situationproyect->created_at ) }}"
                                readonly
                            >
                        </div>
                        <h6>Status</h6>
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
                                <a class="btn btn-danger" href="{{ route('situationproyect.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','situationproyect.edit')
                                        <a class="btn btn-success" href="{{ route('situationproyect.edit',$situationproyect->id) }}">Edit</a>
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
