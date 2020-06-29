@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Relative</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('relative.update', $relative->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameRelative"
                                placeholder="nameRelative"
                                name="nameRelative"
                                value="{{ old('nameRelative', $relative->nameRelative) }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>Firs Last Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="firstLastname"
                                placeholder="First Lastname"
                                name="firstLastname"
                                value="{{ old('firstLastname' , $relative->firstLastname) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Second Last Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="secondLastname"
                                placeholder="Second Lastname"
                                name="secondLastname"
                                value="{{ old('secondLastname' , $relative->secondLastname) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Type Family :</h6>
                            <select class="form-control"  name="typefamilies_id" id="typefamilies_id">
                                @foreach($typefamilys as $typefamily)
                                    <option value="{{ $typefamily->id }}"
                                        @if( $typefamily->descriptionType ==  $relative->typefamily->descriptionType )
                                            selected
                                        @endif
                                        >
                                        {{ $typefamily->descriptionType }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control"
                                id="phoneRelative"
                                placeholder="phoneRelative"
                                name="phoneRelative"
                                value="{{ old('phoneRelative' , $relative->phoneRelative) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Address :</h6>
                            <textarea class="form-control" placeholder="Address Relative" name="addresRelative" id="addresRelative" rows="3">{{ old('addresRelative', $relative->addresRelative) }}</textarea>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusRelative1" name="statusRelative" class="custom-control-input" value="1"
                                @if ( $relative->statusRelative =="1" )
                                    checked
                                @elseif ( old('statusRelative')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusRelative1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusRelative0" name="statusRelative" class="custom-control-input" value="0"
                                @if ( $relative->statusRelative =="0" )
                                    checked
                                @elseif ( old('statusRelative')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusRelative0">Inactivo</label>
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