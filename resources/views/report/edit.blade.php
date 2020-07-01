@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Report</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('report.update', $report->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('nameReport') is-invalid @enderror"
                                id="nameReport" placeholder="Nombre del reporte"
                                name="nameReport" value="{{ old('nameReport', $report->nameReport ) }}"
                                autocomplete="nameReport" autofocus required
                            >
                            @error('nameReport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control @error('descriptionReport') is-invalid @enderror" placeholder="Descripcion del reporte" name="descriptionReport" id="descriptionReport" rows="3" required>{{ old('descriptionReport', $report->descriptionReport ) }}</textarea>
                            @error('descriptionReport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Type File :</h6>
                            <select class="form-control"  name="typefiles_id" id="typefiles_id">
                                @foreach($typefiles as $typefile)
                                    <option value="{{ $typefile->id }}"
                                        @isset( $report->typefile->descriptionFile )
                                            @if( $typefile->descriptionFile ==  $report->typefile->descriptionFile )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $typefile->descriptionFile }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>File :</h6>
                            <input type="text"
                                class="form-control @error('fileReport') is-invalid @enderror"
                                id="fileReport" placeholder="Ruta del archivo"
                                name="fileReport" value="{{ old('fileReport', $report->fileReport ) }}"
                                autocomplete="fileReport" autofocus required
                            >
                            @error('fileReport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                                <a class="btn btn-danger btn-lg" href="{{ route('report.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center><input class="btn btn-primary btn-lg" type="submit" value="Save"></center>
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
