@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Relative</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('relative.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameRelative"
                                placeholder="Name Relative"
                                name="nameRelative"
                                value="{{ old('nameRelative') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>First Last Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="firstLastname"
                                placeholder="First Lastname"
                                name="firstLastname"
                                value="{{ old('firstLastname') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Second Last Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="secondLastname"
                                placeholder="Second Lastname"
                                name="secondLastname"
                                value="{{ old('secondLastname') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Type Family :</h6>
                            <select class="form-control"
                                id="typefamilies_id"
                                name="typefamilies_id">
                                <option value="">--Seleccione Type Family--</option>
                                @foreach ($typefamilys as $typefamily)
                                    <option value="{{$typefamily->id}}">{{$typefamily->descriptionType}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control"
                                id="phoneRelative"
                                placeholder="Phone Relative"
                                name="phoneRelative"
                                value="{{ old('phoneRelative') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Address :</h6>
                            <textarea class="form-control" placeholder="Address Relative" name="addresRelative" id="addresRelative" rows="3">{{ old('addresRelative') }}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control"
                                id="statusRelative"
                                value="1"
                                name="statusRelative"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('relative.index') }}">Back</a>
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
