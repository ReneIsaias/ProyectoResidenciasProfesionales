@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>List of Residents</h2></div>
                <div class="card-body">
                @can('haveaccess','resident.create')
                    <a href="{{ route('resident.create') }}"
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
                                    <th scope="col">Matricula</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Career(s)</th>
                                    <th scope="col">Status</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($residents as $resident)
                                    <tr>
                                        <th scope="row">{{ $resident->id }}</th>
                                        <td>{{ $resident->residentRegistration }}</td>
                                        <td>{{ $resident->nameResident }} {{ $resident->firtsLastnameResident }} {{ $resident->secondLastnameResident }}</td>
                                        <td>{{ $resident->emailResident }}</td>
                                        <td>{{ $resident->phoneResident }}</td>
                                        <td>{{ $resident->career->careerName }}</td>
                                        <td>
                                            @if ($resident->statusResident == "1")
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','resident.show')
                                                <a class="btn btn-info" href="{{ route('resident.show', $resident->id ) }}">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','resident.edit')
                                                <a class="btn btn-success" href="{{ route('resident.edit', $resident->id ) }}">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','resident.destroy')
                                            <form action="{{ route('resident.destroy', $resident->id ) }}" method="POST">
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
                                        <td>residents</td>
                                        <td>registradas</td>
                                        <td>-</td>
                                        <td>aun</td>
                                        <td>-</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $residents->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
