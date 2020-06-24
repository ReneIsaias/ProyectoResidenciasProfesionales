@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Relative</h2></div>
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
                                value="{{ $relative->nameRelative }} {{ $relative->firstLastname }} {{ $relative->secondLastname }}"
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <h6>Type Family :</h6>
                            <select class="form-control"
                                id="id_typefamilies"
                                name="id_typefamilies"
                                disabled>
                                <option value="{{ old('id_typefamilies' , $relative->id_typefamilies) }}">{{ $relative->id_typefamilies }}</option>
                                {{-- @foreach ($typefamilys as $typefamily)
                                    <option value="{{$typefamily->id}}">{{$typefamily->descriptionType}}</option>
                                @endforeach --}}
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
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <h6>Address :</h6>
                            <textarea readonly class="form-control" placeholder="Addres Relative" name="addresRelative" id="addresRelative" rows="3">{{ old('addresRelative', $relative->addresRelative) }}</textarea>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusRelative1" name="statusRelative" class="custom-control-input" value="1"
                                @if ( $relative->statusRelative =="1" )
                                    checked
                                @elseif ( old('statusRelative')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusRelative1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusRelative0" name="statusRelative" class="custom-control-input" value="0"
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
                                <center>
                                    @can('haveaccess','relative.edit')
                                        <a class="btn btn-success" href="{{ route('relative.edit',$relative->id) }}">Edit</a>
                                    @endcan
                                </center>
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
