@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Titular</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('titular.update', $titular->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameTitular"
                                placeholder="Name Titular"
                                name="nameTitular"
                                value="{{ old('nameTitular', $titular->nameTitular) }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>Firs Last Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="firstLastname"
                                placeholder="First Lastname Titular"
                                name="firstLastname"
                                value="{{ old('firstLastname' , $titular->firstLastname) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Second Last Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="secondLastname"
                                placeholder="Second Lastname Titular"
                                name="secondLastname"
                                value="{{ old('secondLastname' , $titular->secondLastname) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Post :</h6>
                            <select class="form-control"
                                id="posts_id"
                                name="posts_id">
                                <option value="">--Seleccione Post--</option>
                                @foreach ($posts as $post)
                                    <option value="{{$post->id}}">{{$post->namePost}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control"
                                id="phoneTitular"
                                placeholder="Phone Titular"
                                name="phoneTitular"
                                value="{{ old('phoneTitular' , $titular->phoneTitular) }}"
                            >
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statustitular1" name="statusTitular" class="custom-control-input" value="1"
                                @if ( $titular->statusTitular =="1" )
                                    checked
                                @elseif ( old('statusTitular')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statustitular1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statustitular0" name="statusTitular" class="custom-control-input" value="0"
                                @if ( $titular->statusTitular =="0" )
                                    checked
                                @elseif ( old('statusTitular')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statustitular0">Inactivo</label>
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
