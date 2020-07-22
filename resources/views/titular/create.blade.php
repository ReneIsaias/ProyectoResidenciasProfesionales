@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
<<<<<<< HEAD
                <center><div class="card-header bg-dark text-white"><h2>Registro Titular de Empresa</h2></div></center>
=======
                <div class="card-header bg-dark text-white"><h2>Registro Titular</h2></div>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('titular.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Datos requeridos</h3>
<<<<<<< HEAD
                        <hr>
                        <div class="form-group">
=======
                        <br>
                        <div class="form-group">
                            <h6>Empresa :</h6>
                            <input type="text"
                                value="{{ Auth::user()->name }}"
                                disabled
                            >
                            {{-- <input type="text" value="{{ $busines->id }}"> --}}
                            <select class="form-control" name="staff_id" id="staff_id">
                                @foreach($busines as $busine)
                                    <option value="{{ $busine->id }}"
                                       {{--  @if( $busine->name ==  $busine->user->name)
                                            selected
                                        @endif --}}
                                    >
                                        {{ $busine->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                            <h6>Nombre :</h6>
                            <input type="text"
                                class="form-control @error('nameTitular') is-invalid @enderror"
                                id="nameTitular" placeholder="Nombre del titular"
                                name="nameTitular" value="{{ old('nameTitular') }}"
                                autocomplete="nameTitular" autofocus required
                            >
                            @error('nameTitular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <h6>Primer apellido :</h6>
=======
                            <h6>Primer Apellido :</h6>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                            <input type="text"
                                class="form-control @error('firstLastname') is-invalid @enderror"
                                id="firstLastname" placeholder="Primer apellido del titular"
                                name="firstLastname" value="{{ old('firstLastname') }}"
                                autocomplete="firstLastname" required
                            >
                            @error('firstLastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
<<<<<<< HEAD
                            <h6>Segundo apellido :</h6>
=======
                            <h6>Segundo Apellido :</h6>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                            <input type="text"
                                class="form-control @error('secondLastname') is-invalid @enderror"
                                id="secondLastname" placeholder="Segundo apellido del titular"
                                name="secondLastname" value="{{ old('secondLastname') }}"
                                autocomplete="secondLastname" required
                            >
                            @error('secondLastname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Puesto :</h6>
                            <select required class="form-control" id="posts_id" name="posts_id">
                                <option value="">--Seleccione el puesto del titular--</option>
                                @foreach ($posts as $posts)
                                    <option value="{{ $posts->id }}">{{ old('posts->namePost', $posts->namePost) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneTitular') is-invalid @enderror"
                                id="phoneTitular" placeholder="Numero de telefono del titular"
                                name="phoneTitular" value="{{ old('phoneTitular') }}"
                                autocomplete="phoneTitular" required
                            >
                            @error('phoneTitular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control" id="statusTitular"
                                value="1" name="statusTitular"
                            >
                        </div>
                        <hr>
<<<<<<< HEAD
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','titular.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('titular.index') }}">Titulares</a>
                                @endcan
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center><input class="btn btn-primary btn-lg" type="submit" value="Siguiente"></center>
                            </div>
=======
                        <center><input class="btn btn-primary btn-lg" type="submit" value="Next"></center>
>>>>>>> ca7ef86cdc8a1cb5e8400d24ea4d6f00ab6c4cd9
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
