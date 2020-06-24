@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>View User</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <br>
                        <div class="form-group">
                            <h6>Name :</h6>
                            <input type="text" class="form-control"
                                id="name"
                                placeholder="Name"
                                name="name"
                                value="{{ old('name', $user->name) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Email :</h6>
                            <input type="text"
                                class="form-control"
                                id="email"
                                placeholder="email"
                                name="email"
                                value="{{ old('email' , $user->email) }}"
                                disabled
                            >
                        </div>
                        <div class="form-group">
                            <h6>Role :</h6>
                            <select disabled class="form-control" name="roles" id="roles">
                                @foreach($roles as $role)
                                    <option value="{{ $role->id }}"
                                        @isset($user->roles[0]->name)
                                            @if($role->name ==  $user->roles[0]->name)
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('user.index') }}">Back</a>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('view', [$user, ['user.edit','userown.edit'] ])
                                        <a class="btn btn-success" href="{{ route('user.edit',$user->id) }}">Edit</a>
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
