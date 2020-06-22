@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Type Save</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('typesafe.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <div class="form-group">
                            <h6>Type Save Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="safeName"
                                placeholder="Save Name"
                                name="safeName"
                                value="{{ old('safeName') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control"
                                id="statusSafe"
                                value="1"
                                name="statusSafe"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('typesafe.index') }}">Back</a>
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
