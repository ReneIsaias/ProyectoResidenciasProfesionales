@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <center><div class="card-header p-3 mb-2 bg-dark text-white"><h2>{{ __('Register') }}</h2></div></center>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-4">
                                <h6>Name :</h6>
                                <input id="nameUser" type="text" class="form-control
                                    @error('nameUser') is-invalid @enderror"
                                    name="nameUser" value="{{ old('nameUser') }}"
                                    required autocomplete="nameUser" autofocus
                                    placeholder="Name of user"
                                >
                                @error('nameUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <h6>First Last Name :</h6>
                                <input id="firstLastname" type="text" class="form-control
                                    @error('firstLastname') is-invalid @enderror"
                                    name="firstLastname" value="{{ old('firstLastname') }}"
                                    required autocomplete="firstLastname"
                                    placeholder="First last name of user"
                                >
                                @error('firstLastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <h6>Second Last Name :</h6>
                                <input id="secondLastname" type="text" class="form-control
                                    @error('secondLastname') is-invalid @enderror"
                                    name="secondLastname" value="{{ old('secondLastname') }}"
                                    required autocomplete="secondLastname"
                                    placeholder="Second last name of user"
                                >
                                @error('secondLastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>Phone :</h6>
                                <input id="phoneUser" type="text" class="form-control
                                    @error('phoneUser') is-invalid @enderror"
                                    name="phoneUser" value="{{ old('phoneUser') }}"
                                    required autocomplete="phoneUser"
                                    placeholder="Number telephone of user"
                                >
                                @error('phoneUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>Name user :</h6>
                                <input id="name" type="text" class="form-control
                                    @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}"
                                    required autocomplete="name"
                                    placeholder="Name user for this acount"
                                >
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>E-Mail Address :</h6>
                                <input id="email" type="email" class="form-control
                                    @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}"
                                    required autocomplete="email"
                                    placeholder="Email address of user"
                                >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>Password :</h6>
                                <input id="password" type="password" class="form-control
                                    @error('password') is-invalid @enderror"
                                    name="password" required autocomplete="new-password"
                                    placeholder="Password of user"
                                >
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <h6>Confirm Password :</h6>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password"
                                    placeholder="Confirm password"
                                >
                                @error('password-confirm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input id="statusUser" type="hidden" class="form-control
                                    @error('statusUser') is-invalid @enderror"
                                    name="statusUser" value="1" required autocomplete="statusUser"
                                >
                                @error('statusUser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
