@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Busines</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('busines.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Rfc :</h6>
                            <input type="text"
                                class="form-control"
                                id="rfcBusiness"
                                placeholder="RFC of Busines"
                                name="rfcBusiness"
                                value="{{ old('rfcBusiness') }}"
                                autofocus
                            >
                        </div>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameBusiness"
                                placeholder="Name Busines"
                                name="nameBusiness"
                                value="{{ old('nameBusiness') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="email"
                                class="form-control"
                                id="emailBusiness"
                                placeholder="Email Busines"
                                name="emailBusiness"
                                value="{{ old('emailBusiness') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Mision :</h6>
                            <textarea class="form-control" placeholder="Mision of busines" name="misionBusiness" id="misionBusiness" rows="3">{{ old('misionBusiness') }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Direction :</h6>
                            <textarea class="form-control" placeholder="Direction of busines" name="addresBusiness" id="addresBusiness" rows="3">{{ old('addresBusiness') }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Colonia :</h6>
                            <input type="text"
                                class="form-control"
                                id="coloniaBusiness"
                                placeholder="Colonia of busines"
                                name="coloniaBusiness"
                                value="{{ old('coloniaBusiness') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>City :</h6>
                            <input type="text"
                                class="form-control"
                                id="cityBusiness"
                                placeholder="City of busines"
                                name="cityBusiness"
                                value="{{ old('cityBusiness') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control"
                                id="phoneBusiness"
                                placeholder="Phone of busines"
                                name="phoneBusiness"
                                value="{{ old('phoneBusiness') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>C.P. :</h6>
                            <input type="text"
                                class="form-control"
                                id="cpBusiness"
                                placeholder="C.P. of busines"
                                name="cpBusiness"
                                value="{{ old('cpBusiness') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Persona Firm :</h6>
                            <input type="text"
                                class="form-control"
                                id="personFirma"
                                placeholder="Persona of firm convenat"
                                name="personFirma"
                                value="{{ old('personFirma') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Post :</h6>
                            <select class="form-control"
                                id="postPerson"
                                name="postPerson">
                                <option value="">--Seleccione Post--</option>
                                @foreach ($posts as $post)
                                    <option value="{{ $post->namePost }}">{{ old('post->namePost', $post->namePost) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="hidden"
                                class="form-control"
                                id="statusBusines"
                                value="1"
                                name="statusBusines"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Titular :</h6>
                            <select class="form-control"
                                id="titulars_id"
                                name="titulars_id">
                                <option value="">--Seleccione Titular--</option>
                                @foreach ($titulars as $titular)
                                    <option value="{{ $titular->id }}">{{ old('titular->nameTitular', $titular->nameTitular) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Staff :</h6>
                            <select class="form-control"
                                id="staff_id"
                                name="staff_id">
                                <option value="">--Seleccione Staff--</option>
                                @foreach ($staffs as $staff)
                                    <option value="{{$staff->id}}">{{ old('staff->nameStaff', $staff->nameStaff) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Convenant :</h6>
                            <select class="form-control"
                                id="covenants_id"
                                name="covenants_id">
                                <option value="">--Seleccione Convenat--</option>
                                @foreach ($covenants as $covenant)
                                    <option value="{{$covenant->id}}">{{ old('covenant->convenant', $covenant->convenant) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Turn :</h6>
                            <select class="form-control"
                                id="turns_id"
                                name="turns_id">
                                <option value="">--Seleccione Turn--</option>
                                @foreach ($turns as $turn)
                                    <option value="{{$turn->id}}">{{ old('turn->descriptionTurn', $turn->descriptionTurn) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Sector :</h6>
                            <select class="form-control"
                                id="sectors_id"
                                name="sectors_id">
                                <option value="">--Seleccione Sector--</option>
                                @foreach ($sectors as $sector)
                                    <option value="{{$sector->id}}">{{ old('sector->descriptionSector', $sector->descriptionSector) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('busines.index') }}">Back</a>
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
