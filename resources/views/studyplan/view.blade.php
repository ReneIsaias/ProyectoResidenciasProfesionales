@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Study Plan</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('studyplan.update', $studyplan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="planStudies"
                                placeholder="planStudies"
                                name="planStudies"
                                value="{{ old('planStudies', $studyplan->planStudies) }}"
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea readonly class="form-control" placeholder="Description Plan Study" name="descriptionPlan" id="descriptionPlan" rows="3">{{ old('descriptionPlan', $studyplan->descriptionPlan) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Date :</h6>
                            <input type="date"
                                class="form-control"
                                id="planDate"
                                placeholder="Plan Date"
                                name="planDate"
                                value="{{ old('planDate' , $studyplan->planDate) }}"
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <h6>Created :</h6>
                            <input type="text"
                                class="form-control"
                                id="created_at"
                                placeholder="created_at "
                                name="created_at "
                                value="{{ old('created_at ' , $studyplan->created_at ) }}"
                                readonly
                            >
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="studyplanStatus1" name="planStatus" class="custom-control-input" value="1"
                                @if ( $studyplan->planStatus =="1" )
                                    checked
                                @elseif ( old('planStatus')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="studyplanStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="studyplanStatus0" name="planStatus" class="custom-control-input" value="0"
                                @if ( $studyplan->planStatus =="0" )
                                    checked
                                @elseif ( old('planStatus')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="studyplanStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('studyplan.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','studyplan.edit')
                                        <a class="btn btn-success" href="{{ route('studyplan.edit',$studyplan->id) }}">Edit</a>
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