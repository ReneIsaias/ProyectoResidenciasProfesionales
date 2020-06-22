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
                        <div class="form-group">
                            <h6>Name covenant :</h6>
                            <input type="text"
                                class="form-control"
                                id="convenant"
                                placeholder="Name Convenant"
                                name="convenant"
                                value="{{ old('convenant', $covenant->convenant) }}"
                                readonly
                            >
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox"
                                class="custom-control-input"
                                id="statusConvenant"
                                name="statusConvenant"
                                @if ( $covenant->statusConvenant == "1" )
                                    value="{{ old('statusConvenant'), "1" }}"
                                    checked
                                @else
                                    value="{{ old('statusConvenant'), "0" }}"
                                @endif
                                disabled
                            >
                            <label class="custom-control-label" for="statusConvenant">Status</label>
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
