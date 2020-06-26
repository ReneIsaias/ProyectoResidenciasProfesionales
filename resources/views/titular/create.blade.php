@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Titular</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('titular.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameTitular"
                                placeholder="Name titular"
                                name="nameTitular"
                                value="{{ old('nameTitular') }}"
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
                            <h6>Post :</h6>
                            <select class="form-control"
                                id="posts_id"
                                name="posts_id">
                                <option value="">--Seleccione Post--</option>
                                @foreach ($posts as $post)
                                    <option value="{{ $post->id }}">{{ old('post->namePost',$post->namePost) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control"
                                id="phoneTitular"
                                placeholder="Phone titular"
                                name="phoneTitular"
                                value="{{ old('phoneTitular') }}"
                            >
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control"
                                id="statusTitular"
                                value="1"
                                name="statusTitular"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('titular.index') }}">Back</a>
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
