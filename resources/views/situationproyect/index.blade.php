@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>List of Situation Proyect</h2></div>
                <div class="card-body">
                @can('haveaccess','situationproyect.create')
                    <a href="{{ route('situationproyect.create') }}"
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
                                @forelse ($situationproyects as $situationproyect)
                                    <tr>
                                        <th scope="row">{{ $situationproyect->id }}</th>
                                        <td>{{ $situationproyect->projectSituation }}</td>
                                        <td>
                                            @if ($situationproyect->statusSituation == "1")
                                                Activa
                                            @else
                                                Inactiva
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','situationproyect.show')
                                                <a class="btn btn-info" href="{{ route('situationproyect.show',$situationproyect->id) }}">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','situationproyect.edit')
                                                <a class="btn btn-success" href="{{ route('situationproyect.edit',$situationproyect->id) }}">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','situationproyect.destroy')
                                            <form action="{{ route('situationproyect.destroy',$situationproyect->id) }}" method="POST">
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
                                        <td>situationproyects</td>
                                        <td>registradas</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $situationproyects->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
