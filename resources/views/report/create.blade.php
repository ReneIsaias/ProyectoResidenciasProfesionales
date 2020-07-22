@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Crear Reporte</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('report.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <hr>
                        <div class="form-group">
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameReport') is-invalid @enderror"
                                id="nameReport" placeholder="Nombre del reporte"
                                name="nameReport" value="{{ old('nameReport') }}"
                                autocomplete="nameReport" autofocus required
                            >
                            @error('nameReport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Descripción :</h6>
                            <textarea class="form-control @error('descriptionReport') is-invalid @enderror" placeholder="Descripcion del reporte" name="descriptionReport" id="descriptionReport" rows="3" required>{{ old('descriptionReport') }}</textarea>
                            @error('descriptionReport')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Tipo de archivo :</h6>
                            <select required class="form-control" id="typefiles_id" name="typefiles_id">
                                <option value="">--Seleccione el tipo de archivo--</option>
                                @foreach ($typefiles as $typefile)
                                    <option value="{{ $typefile->id }}">{{ old('typefile->descriptionFile', $typefile->descriptionFile) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Archivo :</h6>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="searchFile">Buscar</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" required
                                        class="custom-file-input @error('fileReport') is-invalid @enderror"
                                        name="fileReport" id="fileReport" aria-describedby="searchFile"
                                    >
                                    @error('fileReport')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label class="custom-file-label" for="fileReport">Elegir el archivo</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control" id="statusReport"
                                value="1" name="statusReport"
                            >
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','report.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('report.index') }}">Reportes</a>
                                @endcan
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center><input class="btn btn-primary btn-lg" type="submit" value="Guardar"></center>
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
