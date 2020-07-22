@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Reporte</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('report.update', $report->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>{{ $report->nameReport }}</h3>
                        <br>
                        <div class="form-group">
                            <h6>Descripción :</h6>
                            <textarea class="form-control @error('descriptionReport') is-invalid @enderror" disabled placeholder="Descripción del reporte" name="descriptionReport" id="descriptionReport" rows="3" required>{{ old('descriptionReport', $report->descriptionReport ) }}</textarea>
                            @error('descriptionReport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Tipo de archivo :</h6>
                            <select disabled class="form-control"  name="typefiles_id" id="typefiles_id">
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
                            <h6>Archivo :</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="searchFile">Search</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" required disabled
                                        class="custom-file-input @error('fileReport') is-invalid @enderror"
                                        name="fileReport" id="fileReport" aria-describedby="searchFile"
                                    >
                                    @error('fileReport')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label class="custom-file-label" for="fileReport">{{ $report->fileReport }}</label>
                                </div>
                            </div>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusreport1" name="statusReport" class="custom-control-input" value="1"
                                @if ( $report->statusReport =="1" )
                                    checked
                                @elseif ( old('statusReport')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusreport1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusreport0" name="statusReport" class="custom-control-input" value="0"
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
                                @can('haveaccess','report.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('report.index') }}">Reportes</a>
                                @endcan
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','report.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('report.edit',$report->id) }}">Editar</a>
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
