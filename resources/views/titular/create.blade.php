@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Registro Titular</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('titular.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Datos requeridos</h3>
                        <br>
                        <div class="form-group">
                            <h6>Empresa :</h6>
                            <input type="text"
                                value="{{ Auth::user()->name }}"
                                disabled
                            >
                            {{-- <input type="text" value="{{ $busines->id }}"> --}}
                            {{-- <select disabled class="form-control" name="staff_id" id="staff_id">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}"
                                        @if( {{ Auth::user()->name }} ==  $busines->user->name)
                                            selected
                                        @endif
                                    >
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select> --}}
                        </div>
                        <div class="form-group">
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
                            <h6>Primer Apellido :</h6>
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
                            <h6>Segundo Apellido :</h6>
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
                        <center><input class="btn btn-primary btn-lg" type="submit" value="Next"></center>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
