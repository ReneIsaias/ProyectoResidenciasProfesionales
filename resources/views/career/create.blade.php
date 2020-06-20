@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Career</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('career.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <div class="form-group">
                            <h6>key Career :</h6>
                            <input type="text"
                                class="form-control"
                                id="keyCareer"
                                placeholder="key career"
                                name="keyCareer"
                                value="{{ old('keyCareer') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>career Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="careerName"
                                placeholder="career Name"
                                name="careerName"
                                value="{{ old('careerName') }}"
                            >
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox"
                                class="custom-control-input"
                                id="careerStatus"
                                value="1"
                                name="careerStatus"
                                checked
                            >
                            <label class="custom-control-label" for="careerStatus">Status</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('career.index') }}">Back</a>
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
