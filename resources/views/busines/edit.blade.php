@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Busines</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('busines.update', $busines->id) }}" method="POST">
                    @csrf
                    @method('PUT')
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
                                value="{{ old('rfcBusiness', $busines->rfcBusiness ) }}"
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
                                value="{{ old('nameBusiness', $busines->nameBusiness ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="email"
                                class="form-control"
                                id="emailBusiness"
                                placeholder="Email Busines"
                                name="emailBusiness"
                                value="{{ old('emailBusiness', $busines->emailBusiness ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Mision :</h6>
                            <textarea class="form-control" placeholder="Mision of busines" name="misionBusiness" id="misionBusiness" rows="3">{{ old('misionBusiness', $busines->misionBusiness ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Direction :</h6>
                            <textarea class="form-control" placeholder="Direction of busines" name="addresBusiness" id="addresBusiness" rows="3">{{ old('addresBusiness', $busines->addresBusiness ) }}</textarea>
                        </div>
                        <div class="form-group">
                            <h6>Colonia :</h6>
                            <input type="text"
                                class="form-control"
                                id="coloniaBusiness"
                                placeholder="Colonia of busines"
                                name="coloniaBusiness"
                                value="{{ old('coloniaBusiness', $busines->coloniaBusiness ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>City :</h6>
                            <input type="text"
                                class="form-control"
                                id="cityBusiness"
                                placeholder="City of busines"
                                name="cityBusiness"
                                value="{{ old('cityBusiness', $busines->cityBusiness ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control"
                                id="phoneBusiness"
                                placeholder="Phone of busines"
                                name="phoneBusiness"
                                value="{{ old('phoneBusiness', $busines->phoneBusiness ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>C.P. :</h6>
                            <input type="text"
                                class="form-control"
                                id="cpBusiness"
                                placeholder="C.P. of busines"
                                name="cpBusiness"
                                value="{{ old('cpBusiness', $busines->cpBusiness ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Persona Firm :</h6>
                            <input type="text"
                                class="form-control"
                                id="personFirma"
                                placeholder="Persona of firm convenat"
                                name="personFirma"
                                value="{{ old('personFirma', $busines->personFirma ) }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Post :</h6>
                            <select class="form-control" name="postPerson" id="postPerson">
                                @foreach($posts as $post)
                                    <option value="{{ $post->namePost }}"
                                        @if($post->namePost ==  $busines->namePost)
                                            selected
                                        @endif
                                        >
                                        {{ $post->namePost }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Titular :</h6>
                            <select class="form-control" name="titulars_id" id="titulars_id">
                                @foreach($titulars as $titular)
                                    <option value="{{ $titular->id }}"
                                        @if($titular->nameTitular ==  $busines->titular->nameTitular)
                                            selected
                                        @endif
                                        >
                                        {{ $titular->nameTitular }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Staff :</h6>
                            <select class="form-control" name="staff_id" id="staff_id">
                                @foreach($staffs as $staff)
                                    <option value="{{ $staff->id }}"
                                        @if($staff->nameStaff ==  $busines->staff->nameStaff)
                                            selected
                                        @endif
                                        >
                                        {{ $staff->nameStaff }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Convenant :</h6>
                            <select class="form-control" name="covenants_id" id="covenants_id">
                                @foreach($covenants as $covenant)
                                    <option value="{{ $covenant->id }}"
                                        @if($covenant->convenant ==  $busines->covenant->convenant)
                                            selected
                                        @endif
                                        >
                                        {{ $covenant->convenant }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Turn :</h6>
                            <select class="form-control" name="turns_id" id="turns_id">
                                @foreach($turns as $turn)
                                    <option value="{{ $turn->id }}"
                                        @if($turn->descriptionTurn ==  $busines->turn->descriptionTurn)
                                            selected
                                        @endif
                                        >
                                        {{ $turn->descriptionTurn }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Sector :</h6>
                            <select class="form-control" name="sectors_id" id="sectors_id">
                                @foreach($sectors as $sector)
                                    <option value="{{ $sector->id }}"
                                        @if($sector->descriptionSector ==  $busines->sector->descriptionSector)
                                            selected
                                        @endif
                                        >
                                        {{ $sector->descriptionSector }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusbusines1" name="statusBusines" class="custom-control-input" value="1"
                                @if ( $busines->statusBusines =="1" )
                                    checked
                                @elseif ( old('statusBusines')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusbusines1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="statusbusines0" name="statusBusines" class="custom-control-input" value="0"
                                @if ( $busines->statusBusines =="0" )
                                    checked
                                @elseif ( old('statusBusines')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusbusines0">Inactivo</label>
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
