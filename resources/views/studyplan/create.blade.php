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
                                class="form-control @error('planStudies') is-invalid @enderror"
                                id="planStudies" placeholder="Nombre del plan de estudios"
                                name="planStudies" value="{{ old('planStudies') }}"
                                autocomplete="planStudies" required autofocus
                            >
                            @error('planStudies')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control @error('descriptionPlan') is-invalid @enderror" placeholder="Descripcion del plan de estudios" name="descriptionPlan" id="descriptionPlan" rows="3">{{ old('descriptionPlan') }}</textarea>
                            @error('descriptionPlan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Date :</h6>
                            <input type="date"
                                class="form-control @error('planDate') is-invalid @enderror"
                                id="planDate" placeholder="Plan Date"
                                name="planDate" value="{{ old('planDate') }}"
                                autocomplete="planDate" required
                            >
                            @error('planDate')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control" id="planStatus"
                                value="1" name="planStatus"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('studyplan.index') }}">Back</a>
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
