@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Report</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('report.update', $report->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameReport"
                                placeholder="Name of Report"
                                name="nameReport"
                                value="{{ old('nameReport', $report->nameReport) }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control" placeholder="Description report" name="descriptionReport" id="descriptionReport" rows="3">{{ old('descriptionReport', $report->descriptionReport) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Type File :</h6>
                            <select class="form-control"  name="typefiles_id" id="typefiles_id">
                                @foreach($typefiles as $typefile)
                                    <option value="{{ $typefile->id }}"
                                        @if( $typefile->descriptionFile ==  $report->typefile->descriptionFile )
                                            selected
                                        @endif
                                        >
                                        {{ $typefile->descriptionFile }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusreport1" name="statusReport" class="custom-control-input" value="1"
                                @if ( $report->statusReport =="1" )
                                    checked
                                @elseif ( old('statusReport')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusreport1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusreport0" name="statusReport" class="custom-control-input" value="0"
                                @if ( $report->statusReport =="0" )
                                    checked
                                @elseif ( old('statusReport')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusreport0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('report.index') }}">Back</a>
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
