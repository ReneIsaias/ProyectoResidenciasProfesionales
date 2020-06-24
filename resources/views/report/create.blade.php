@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Report</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('report.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameReport"
                                placeholder="Name report"
                                name="nameReport"
                                value="{{ old('nameReport') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control" placeholder="Description report" name="descriptionReport" id="descriptionReport" rows="3">{{ old('descriptionReport') }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Type File :</h6>
                            <select class="form-control"
                                id="typefiles_id"
                                name="typefiles_id">
                                <option value="">--Seleccione Type File--</option>
                                @foreach ($typefiles as $typefile)
                                    <option value="{{$typefile->id}}">{{ $typefile->descriptionFile }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control"
                                id="statusReport"
                                value="1"
                                name="statusReport"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('report.index') }}">Back</a>
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
