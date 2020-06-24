@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>List of Titulars</h2></div>
                <div class="card-body">
                @can('haveaccess','titular.create')
                    <a href="{{ route('titular.create') }}"
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
                                    <th scope="col">Post    </th>
                                    <th scope="col">Status</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($titulars as $titular)
                                    <tr>
                                        <th scope="row">{{ $titular->id }}</th>
                                        <td>{{ $titular->nameTitular}}
                                            {{ $titular->firstLastname}}
                                            {{ $titular->secondLastname}}
                                        </td>
                                        <td>{{ $titular->phoneTitular }}</td>
                                        {{-- <td>
                                            @isset( $titular->typefamilies[0]->descriptionType )
                                                {{ $titular->typefamilies[0]->descriptionType }}
                                            @endisset
                                        </td> --}}
                                        <td>{{ $titular->posts_id }}</td>
                                        <td>
                                            @if ($titular->statusTitular== "1")
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','titular.show')
                                                <a class="btn btn-info" href="{{ route('titular.show',$titular->id) }}">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','titular.edit')
                                                <a class="btn btn-success" href="{{ route('titular.edit',$titular->id) }}">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','titular.destroy')
                                            <form action="{{ route('titular.destroy',$titular->id) }}" method="POST">
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
                                        <td>titulars</td>
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
                            {{ $titulars->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
