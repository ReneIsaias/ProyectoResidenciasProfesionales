@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>List of Busines</h2></div>
                <div class="card-body">
                @can('haveaccess','busines.create')
                    <a href="{{ route('busines.create') }}"
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
                                    <th scope="col">Email</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Sector(s)</th>
                                    <th scope="col">Status</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($business as $busines)
                                    <tr>
                                        <th scope="row">{{ $busines->id }}</th>
                                        <td>{{ $busines->nameBusiness }}</td>
                                        <td>{{ $busines->emailBusiness }}</td>
                                        <td>{{ $busines->cityBusiness }}</td>
                                        <td>{{ $busines->phoneBusiness }}</td>
                                        <td>{{ $busines->sector->descriptionSector }}</td>
                                        <td>
                                            @if ($busines->statusBusines == "1")
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','busines.show')
                                                <a class="btn btn-info" href="{{ route('busines.show', $busines->id ) }}">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','busines.edit')
                                                <a class="btn btn-success" href="{{ route('busines.edit', $busines->id ) }}">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','busines.destroy')
                                            <form action="{{ route('busines.destroy', $busines->id ) }}" method="POST">
                                            @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>-</td>
                                        <td>No</td>
                                        <td>hay</td>
                                        <td>-</td>
                                        <td>business</td>
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
                            {{ $business->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
