@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>List of Type Saves</h2></div>
                <div class="card-body">
                @can('haveaccess','typesafe.create')
                    <a href="{{ route('typesafe.create') }}"
                        class="btn btn-primary float-right"
                        >
                        Create
                    </a>
                    <br><br>
                @endcan
                    @include('custom.message')
                    <div class="table-responsive-xl">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Status</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($typesafes as $typesafe)
                                    <tr>
                                        <th scope="row">{{ $typesafe->id }}</th>
                                        <td>{{ $typesafe->safeName }}</td>
                                        <td>
                                            @if ($typesafe->statusSafe == "1")
                                                Activa
                                            @else
                                                Inactiva
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','typesafe.show')
                                                <a class="btn btn-info" href="{{ route('typesafe.show',$typesafe->id) }}">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','typesafe.edit')
                                                <a class="btn btn-success" href="{{ route('typesafe.edit',$typesafe->id) }}">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','typesafe.destroy')
                                            <form action="{{ route('typesafe.destroy',$typesafe->id) }}" method="POST">
                                            @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No</td>
                                        <td>hay</td>
                                        <td>Type Saves</td>
                                        <td>registradas</td>
                                        <td></td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $typesafes->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
