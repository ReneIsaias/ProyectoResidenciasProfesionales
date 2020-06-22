@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>List of type Becas</h2></div>
                <div class="card-body">
                @can('haveaccess','typebeca.create')
                    <a href="{{ route('typebeca.create') }}"
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
                                @forelse ($typebecas as $typebeca)
                                    <tr>
                                        <th scope="row">{{ $typebeca->id }}</th>
                                        <td>{{ $typebeca->descriptionBeca }}</td>
                                        <td>
                                            @if ($typebeca->statusBeca == "1")
                                                Activa
                                            @else
                                                Inactiva
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','typebeca.show')
                                                <a class="btn btn-info" href="{{ route('typebeca.show',$typebeca->id) }}">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','typebeca.edit')
                                                <a class="btn btn-success" href="{{ route('typebeca.edit',$typebeca->id) }}">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','typebeca.destroy')
                                            <form action="{{ route('typebeca.destroy',$typebeca->id) }}" method="POST">
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
                                        <td>typebecas</td>
                                        <td>registradas</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $typebecas->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
