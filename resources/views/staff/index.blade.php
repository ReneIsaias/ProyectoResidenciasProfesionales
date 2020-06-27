@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>List of Staffs</h2></div>
                <div class="card-body">
                @can('haveaccess','staff.create')
                    <a href="{{ route('staff.create') }}"
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
                                    <th scope="col">Key</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Career(s)</th>
                                    <th scope="col">Status</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($staffs as $staff)
                                    <tr>
                                        <th scope="row">{{ $staff->id }}</th>
                                        <td>{{ $staff->keyStaff }}</td>
                                        <td>{{ $staff->nameStaff }} {{ $staff->firstLastname }} {{ $staff->secondLastname }}</td>
                                        <td>{{ $staff->emailStaff }}</td>
                                        <td>{{ $staff->phoneStaff }}</td>
                                        <td>{{ $staff->career->careerName }}</td>
                                        <td>
                                            @if ($staff->statusStaff == "1")
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','staff.show')
                                                <a class="btn btn-info" href="{{ route('staff.show',$staff->id) }}">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','staff.edit')
                                                <a class="btn btn-success" href="{{ route('staff.edit',$staff->id) }}">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','staff.destroy')
                                            <form action="{{ route('staff.destroy',$staff->id) }}" method="POST">
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
                                        <td>staffs</td>
                                        <td>registrados</td>
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
                            {{ $staffs->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
