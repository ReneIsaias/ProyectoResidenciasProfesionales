@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Buscar Residente</h2></div></center>
                <div class="card-body">
                    @if (session('status_success'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status_success') }}
                        </div>
                    @endif
                    <form action="{{ route('resident.tramita') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Ingrese su matricula</h3>
                        <hr>
                        <br>
                        <div class="form-group">
                            <h6>Numero de cuenta :</h6>
                            <input type="text"
                                class="form-control @error('clvPersona') is-invalid @enderror"
                                id="clvPersona" placeholder="Numero de cuenta del residente"
                                name="clvPersona" value="{{ old('clvPersona') }}"
                                autocomplete="clvPersona" required autofocus
                                maxlength="15" minlength="8"
                            >
                            @error('clvPersona')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <hr>
                        <center><input class="btn btn-primary btn-lg" type="submit" value="Buscar"></center>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
