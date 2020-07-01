@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View Role</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('role.update', $role->id ) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                id="name" placeholder="Name of role"
                                name="name" value="{{ old('name', $role->name ) }}"
                                autocomplete="name" autofocus disabled required
                            >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Slug :</h6>
                            <input type="text"
                                class="form-control @error('slug') is-invalid @enderror"
                                id="slug" placeholder="Slug of role"
                                name="slug" value="{{ old('slug', $role->slug ) }}"
                                autocomplete="slug" disabled required
                            >
                            @error('slug')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control @error('description') is-invalid @enderror" disabled placeholder="Description of role" name="description" id="description" rows="3" required>{{ old('description', $role->description ) }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <hr>
                        <h3>Full Access :</h3>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
                                @if ( $role['full-access']=="yes" )
                                    checked
                                @elseif ( old('full-access')=="yes" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="fullaccessyes">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no"
                                @if ( $role['full-access']=="no" )
                                    checked
                                @elseif ( old('full-access')=="no" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="fullaccessno">No</label>
                        </div>
                        <hr>
                        <h3>Permission List</h3>
                        @foreach( $permissions as $permission )
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" disabled class="custom-control-input"
                                    id="permission_{{ $permission->id }}"
                                    value="{{ $permission->id }}" name="permission[]"
                                    @if( is_array(old('permission')) && in_array("$permission->id", old('permission')) )
                                        checked
                                    @elseif( is_array($permission_role) && in_array("$permission->id", $permission_role) )
                                        checked
                                    @endif
                                >
                                <label class="custom-control-label"
                                    for="permission_{{$permission->id}}">
                                    {{ $permission->id }}
                                    -
                                    {{ $permission->name }}
                                    <em>( {{ $permission->description }} )</em>
                                </label>
                            </div>
                        @endforeach
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger btn-lg" href="{{ route('role.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','role.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('role.edit',$role->id) }}">Edit</a>
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
