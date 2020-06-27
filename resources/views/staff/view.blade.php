@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Staff</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('staff.update', $staff->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Key :</h6>
                            <input type="text"
                                class="form-control"
                                id="keyStaff"
                                placeholder="Staff key"
                                name="keyStaff"
                                value="{{ old('keyStaff', $staff->keyStaff ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="nameStaff"
                                placeholder="Name staff"
                                name="nameStaff"
                                value="{{ $staff->nameStaff }} {{ $staff->firstLastname }} {{  $staff->secondLastname }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="email"
                                class="form-control"
                                id="emailStaff"
                                placeholder="Email staff"
                                name="emailStaff"
                                value="{{ old('emailStaff', $staff->emailStaff ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Phone :</h6>
                            <input type="text"
                                class="form-control"
                                id="phoneStaff"
                                placeholder="Phone staff"
                                name="phoneStaff"
                                value="{{ old('phoneStaff', $staff->phoneStaff ) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Post :</h6>
                            <select disabled class="form-control" name="posts_id" id="posts_id">
                                @foreach($posts as $post)
                                    <option value="{{ $post->id }}"
                                        @if($post->namePost ==  $staff->post->namePost)
                                            selected
                                        @endif
                                        >
                                        {{ $post->namePost }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Degree Study :</h6>
                            <select disabled class="form-control" name="degrestudies_id" id="degrestudies_id">
                                @foreach($degrestudys as $degrestudy)
                                    <option value="{{ $degrestudy->id }}"
                                        @if($degrestudy->degreeStudy ==  $staff->degrestudy->degreeStudy)
                                            selected
                                        @endif
                                        >
                                        {{ $degrestudy->degreeStudy }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Careers :</h6>
                            <select disabled class="form-control" name="careers_id" id="careers_id">
                                @foreach($careers as $career)
                                    <option value="{{ $career->id }}"
                                        @if($career->careerName ==  $staff->career->careerName)
                                            selected
                                        @endif
                                        >
                                        {{ $career->careerName }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusstaff1" name="statusStaff" class="custom-control-input" value="1"
                                @if ( $staff->statusStaff =="1" )
                                    checked
                                @elseif ( old('statusStaff')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusstaff1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statusstaff0" name="statusStaff" class="custom-control-input" value="0"
                                @if ( $staff->statusStaff =="0" )
                                    checked
                                @elseif ( old('statusStaff')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statusstaff0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('staff.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','staff.edit')
                                        <a class="btn btn-success" href="{{ route('staff.edit',$staff->id) }}">Edit</a>
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
