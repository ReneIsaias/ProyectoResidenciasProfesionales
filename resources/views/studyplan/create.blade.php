@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Study Plan</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('studyplan.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="planStudies"
                                placeholder="Plan Studies"
                                name="planStudies"
                                value="{{ old('planStudies') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control" placeholder="Description Plan Study" name="descriptionPlan" id="descriptionPlan" rows="3">{{ old('descriptionPlan') }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Date :</h6>
                            <input type="date"
                                class="form-control"
                                id="planDate"
                                placeholder="Plan Date"
                                name="planDate"
                                value="{{ old('planDate') }}"
                            >
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control"
                                id="planStatus"
                                value="1"
                                name="planStatus"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('studyplan.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center><input class="btn btn-primary" type="submit" value="Save"></center>
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
