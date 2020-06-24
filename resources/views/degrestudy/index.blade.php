@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>List of Degrese Study</h2></div>
                <div class="card-body">
                @can('haveaccess','degrestudy.create')
                    <a href="{{ route('degrestudy.create') }}"
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
                                @forelse ($degrestudys as $degrestudy)
                                    <tr>
                                        <th scope="row">{{ $degrestudy->id }}</th>
                                        <td>{{ $degrestudy->degreeStudy }}</td>
                                        <td>
                                            @if ($degrestudy->statusDegree == "1")
                                                Activa
                                            @else
                                                Inactiva
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','degrestudy.show')
                                                <a class="btn btn-info" href="{{ route('degrestudy.show',$degrestudy->id) }}">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','degrestudy.edit')
                                                <a class="btn btn-success" href="{{ route('degrestudy.edit',$degrestudy->id) }}">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','degrestudy.destroy')
                                            <form action="{{ route('degrestudy.destroy',$degrestudy->id) }}" method="POST">
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
                                        <td>degree studys</td>
                                        <td>registradas</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $degrestudys->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
