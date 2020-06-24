@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Degree Study</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('degrestudy.update', $degrestudy->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="degreeStudy"
                                placeholder="Degree Study"
                                name="degreeStudy"
                                value="{{ old('degreeStudy' , $degrestudy->degreeStudy) }}"
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <h6>Created :</h6>
                            <input type="text"
                                class="form-control"
                                id="created_at"
                                placeholder="created_at"
                                name="created_at "
                                value="{{ old('created_at' , $degrestudy->created_at ) }}"
                                readonly
                            >
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="degrestudyStatus1" name="statusDegree" class="custom-control-input" value="1"
                                @if ( $degrestudy->statusDegree =="1" )
                                    checked
                                @elseif ( old('statusDegree')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="degrestudyStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="degrestudyStatus0" name="statusDegree" class="custom-control-input" value="0"
                                @if ( $degrestudy->statusDegree =="0" )
                                    checked
                                @elseif ( old('statusDegree')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="degrestudyStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('degrestudy.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','degrestudy.edit')
                                        <a class="btn btn-success" href="{{ route('degrestudy.edit',$degrestudy->id) }}">Edit</a>
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
