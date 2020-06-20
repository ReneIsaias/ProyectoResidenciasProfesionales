@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Career</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('career.update', $career->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <div class="form-group">
                            <h6>key Career :</h6>
                            <input type="text"
                                class="form-control"
                                id="keyCareer"
                                placeholder="key career"
                                name="keyCareer"
                                value="{{ old('keyCareer', $career->keyCareer) }}"
                                readonly
                            >
                        </div>
                        <div class="form-group">
                            <h6>career Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="careerName"
                                placeholder="Career name"
                                name="careerName"
                                value="{{ old('careerName' , $career->careerName) }}"
                                readonly
                            >
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox"
                                disabled
                                class="custom-control-input"
                                id="careerStatus"
                                name="careerStatus"
                                @if ( $career->careerStatus == "1" )
                                    value="{{ old('careerStatus'), "1" }}"
                                    checked
                                @else
                                    value="{{ old('careerStatus'), "0" }}"
                                @endif
                            >
                            <label class="custom-control-label" for="careerStatus">Status</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('career.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','career.edit')
                                        <a class="btn btn-success" href="{{ route('career.edit',$career->id) }}">Edit</a>
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
