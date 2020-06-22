@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Edit Post</h2></div>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('post.update', $post->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>Required data</h3>
                        <div class="form-group">
                            <h6>Name Post :</h6>
                            <input type="text"
                                class="form-control"
                                id="namePost"
                                placeholder="Name Post"
                                name="namePost"
                                value="{{ old('namePost' , $post->namePost) }}"
                            >
                        </div>
                        <h6>Status</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="postStatus1" name="statusPost" class="custom-control-input" value="1"
                                @if ( $post->statusPost =="1" )
                                    checked
                                @elseif ( old('statusPost')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="postStatus1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="postStatus0" name="statusPost" class="custom-control-input" value="0"
                                @if ( $post->statusPost =="0" )
                                    checked
                                @elseif ( old('statusPost')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="postStatus0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                <a class="btn btn-danger" href="{{ route('post.index') }}">Back</a>
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
