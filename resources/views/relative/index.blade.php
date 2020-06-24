@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>List of Relatives</h2></div>
                <div class="card-body">
                @can('haveaccess','relative.create')
                    <a href="{{ route('relative.create') }}"
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
                                    <th scope="col">Phone</th>
                                    <th scope="col">Type Family</th>
                                    <th scope="col">Status</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($relatives as $relative)
                                    <tr>
                                        <th scope="row">{{ $relative->id }}</th>
                                        <td>{{ $relative->nameRelative}}
                                            {{ $relative->firstLastname}}
                                            {{ $relative->secondLastname}}
                                        </td>
                                        <td>{{ $relative->phoneRelative }}</td>
                                        {{-- <td>
                                            @isset( $relative->typefamilies[0]->descriptionType )
                                                {{ $relative->typefamilies[0]->descriptionType }}
                                            @endisset
                                        </td> --}}
                                        <td>{{ $relative->typefamilies_id }}</td>
                                        <td>
                                            @if ($relative->statusRelative == "1")
                                                Activa
                                            @else
                                                Inactiva
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','relative.show')
                                                <a class="btn btn-info" href="{{ route('relative.show',$relative->id) }}">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','relative.edit')
                                                <a class="btn btn-success" href="{{ route('relative.edit',$relative->id) }}">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','relative.destroy')
                                            <form action="{{ route('relative.destroy',$relative->id) }}" method="POST">
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
                                        <td>relatives</td>
                                        <td>registradas</td>
                                        <td>aun</td>
                                        <td>-</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $relatives->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
