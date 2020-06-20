@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Create Role</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('role.store') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h3>Required data</h3>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text"
                                class="form-control"
                                id="name"
                                placeholder="Name"
                                name="name"
                                value="{{ old('name') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Slug :</h6>
                            <input type="text"
                                class="form-control"
                                id="slug"
                                placeholder="Slug"
                                name="slug"
                                value="{{ old('slug') }}"
                            >
                        </div>
                        <div class="form-group">
                            <h6>Description :</h6>
                            <textarea class="form-control" placeholder="Description" name="description" id="description" rows="3">
                                {{ old('description') }}
                            </textarea>
                        </div>
                        <hr>
                        <h3>Full Access</h3>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="fullaccessyes" name="full-access" class="custom-control-input" value="yes"
                                @if ( old('full-access')=="yes" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="fullaccessyes">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="fullaccessno" name="full-access" class="custom-control-input" value="no"
                                @if ( old('full-access')=="no" )
                                    checked
                                @endif
                                @if ( old('full-access')===null )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="fullaccessno">No</label>
                        </div>
                        <hr>
                        <h3>Permission List</h3>
                        @forelse ( $permissions as $permission )
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox"
                                    class="custom-control-input"
                                    id="permission_{{ $permission->id }}"
                                    value="{{$permission->id}}"
                                    name="permission[]"
                                    @if( is_array(old('permission')) && in_array("$permission->id", old('permission')) )
                                        checked
                                    @endif
                                >
                                <label class="custom-control-label"
                                    for="permission_{{ $permission->id }}">
                                    {{ $permission->id }}
                                    -
                                    {{ $permission->name }}
                                    <em>( {{ $permission->description }} )</em>
                                </label>
                            </div>
                        @empty
                            <li>No hay permisos registrados</li>
                        @endforelse
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('role.index') }}">Back</a>
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
