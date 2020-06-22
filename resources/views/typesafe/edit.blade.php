@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Type Save</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('typesafe.update', $typesafe->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <div class="form-group">
                            <h6>Type Safe Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="safeName"
                                placeholder="Safe Name"
                                name="safeName"
                                value="{{ old('safeName' , $typesafe->safeName) }}"
                            >
                        </div>
                        <h6>Status</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="typesafeStatus1" name="statusSafe" class="custom-control-input" value="1"
                                @if ( $typesafe->statusSafe =="1" )
                                    checked
                                @elseif ( old('statusSafe')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="typesafeStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="typesafeStatus0" name="statusSafe" class="custom-control-input" value="0"
                                @if ( $typesafe->statusSafe =="0" )
                                    checked
                                @elseif ( old('statusSafe')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="typesafeStatus0">Inactivo</label>
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
