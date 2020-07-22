@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Titular</h2></div></center>
                <div class="card-body">
                    @include('custom.message')
                    <form action="{{ route('titular.update', $titular->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <h3>{{ $titular->nameTitular }} {{ $titular->firstLastname }} {{ $titular->secondLastname }}</h3>
                        <br>
                        <div class="form-group">
                            <h6>Puesto :</h6>
                            <select disabled class="form-control"  name="posts_id" id="posts_id">
                                @foreach($posts as $post)
                                    <option value="{{ $post->id }}"
                                        @isset( $titular->post->namePost )
                                            @if( $post->namePost ==  $titular->post->namePost )
                                                selected
                                            @endif
                                        @endisset
                                        >
                                        {{ $post->namePost }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <h6>Telefono :</h6>
                            <input type="text"
                                class="form-control @error('phoneTitular') is-invalid @enderror"
                                id="phoneTitular" placeholder="phoneTitular"
                                name="phoneTitular" disabled
                                value="{{ old('phoneTitular' , $titular->phoneTitular) }}"
                            >
                            @error('phoneTitular')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <h6>Status :</h6>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statustitular1" name="statusTitular" class="custom-control-input" value="1"
                                @if ( $titular->statusTitular =="1" )
                                    checked
                                @elseif ( old('statusTitular')=="1" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statustitular1">Activo</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input disabled type="radio" id="statustitular0" name="statusTitular" class="custom-control-input" value="0"
                                @if ( $titular->statusTitular =="0" )
                                    checked
                                @elseif ( old('statusTitular')=="0" )
                                    checked
                                @endif
                            >
                            <label class="custom-control-label" for="statustitular0">Inactivo</label>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-3 mb-4">
                                @can('haveaccess','titular.index')
                                    <a class="btn btn-danger btn-lg" href="{{ route('titular.index') }}">Titulares</a>
                                @endcan
                            </div>
                            <div class="col-lg-6 mb-4">
                                <center>
                                    @can('haveaccess','titular.edit')
                                        <a class="btn btn-success btn-lg" href="{{ route('titular.edit',$titular->id) }}">Editar</a>
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
