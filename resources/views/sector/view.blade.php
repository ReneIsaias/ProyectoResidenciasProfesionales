@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Sector</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('sector.update', $sector->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="descriptionSector"
                                placeholder="Description Sector"
                                name="descriptionSector"
                                value="{{ old('descriptionSector' , $sector->descriptionSector) }}"
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <h6>Created :</h6>
                            <input type="text"
                                class="form-control"
                                id="created_at"
                                placeholder="created_at"
                                name="created_at "
                                value="{{ old('created_at' , $sector->created_at ) }}"
                                readonly
                            >
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="sectorStatus1" name="statusSector" class="custom-control-input" value="1"
                                @if ( $sector->statusSector =="1" )
                                    checked
                                @elseif ( old('statusSector')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="sectorStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="sectorStatus0" name="statusSector" class="custom-control-input" value="0"
                                @if ( $sector->statusSector =="0" )
                                    checked
                                @elseif ( old('statusSector')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="sectorStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('sector.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','sector.edit')
                                        <a class="btn btn-success" href="{{ route('sector.edit',$sector->id) }}">Edit</a>
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
