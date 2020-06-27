@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Staff</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('staff.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Key :</h6>
                            <input type="text"
                                class="form-control"
                                id="keyStaff"
                                placeholder="Staff key"
                                name="keyStaff"
                                value="{{ old('keyStaff') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameStaff"
                                placeholder="Name staff"
                                name="nameStaff"
                                value="{{ old('nameStaff') }}"
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
                            <h6>Email :</h6>
                            <input type="email"
                                class="form-control"
                                id="emailStaff"
                                placeholder="Email staff"
                                name="emailStaff"
                                value="{{ old('emailStaff') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control"
                                id="phoneStaff"
                                placeholder="Phone staff"
                                name="phoneStaff"
                                value="{{ old('phoneStaff') }}"
                            >
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control"
                                id="statusStaff"
                                value="1"
                                name="statusStaff"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Post :</h6>
                            <select class="form-control"
                                id="posts_id"
                                name="posts_id">
                                <option value="">--Seleccione Post--</option>
                                @foreach ($posts as $post)
                                    <option value="{{$post->id}}">{{ old('post->namePost', $post->namePost) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Degree Study :</h6>
                            <select class="form-control"
                                id="degrestudies_id"
                                name="degrestudies_id">
                                <option value="">--Seleccione Degree Study--</option>
                                @foreach ($degrestudys as $degrestudy)
                                    <option value="{{$degrestudy->id}}">{{ old('degrestudy->degreeStudy', $degrestudy->degreeStudy) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Career :</h6>
                            <select class="form-control"
                                id="careers_id"
                                name="careers_id">
                                <option value="">--Seleccione Career--</option>
                                @foreach ($careers as $career)
                                    <option value="{{$career->id}}">{{ old('career->careerName', $career->careerName) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('staff.index') }}">Back</a>
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
