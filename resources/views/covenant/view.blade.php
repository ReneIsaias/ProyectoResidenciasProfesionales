@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Convenant</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('covenant.update', $covenant->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="convenant"
                                placeholder="Name Convenant"
                                name="convenant"
                                value="{{ old('convenant' , $covenant->convenant) }}"
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control" name="descriptionConvenant" id="descriptionConvenant" rows="3" readonly>{{ old('descriptionConvenant', $covenant->descriptionConvenant) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Created :</h6>
                            <input type="text"
                                class="form-control"
                                id="created_at"
                                placeholder="created_at"
                                name="created_at "
                                value="{{ old('created_at' , $covenant->created_at ) }}"
                                readonly
                            >
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="covenantStatus1" name="statusConvenant" class="custom-control-input" value="1"
                                @if ( $covenant->statusConvenant =="1" )
                                    checked
                                @elseif ( old('statusConvenant')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="covenantStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="covenantStatus0" name="statusConvenant" class="custom-control-input" value="0"
                                @if ( $covenant->statusConvenant =="0" )
                                    checked
                                @elseif ( old('statusConvenant')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="covenantStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('covenant.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','covenant.edit')
                                        <a class="btn btn-success" href="{{ route('covenant.edit',$covenant->id) }}">Edit</a>
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
