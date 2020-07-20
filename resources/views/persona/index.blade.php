@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>List of Students</h2></div>
                <div class="card-body">
                @can('haveaccess','persona.create')
                    <a href="{{ route('persona.create') }}"
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
                                    <th scope="col">Matricula</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Semestre</th>
                                    <th scope="col">Grupo</th>
                                    <th scope="col">Status</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($personas as $persona)
                                    <tr>
                                        <td>{{ $persona->id }}</td>
                                        <td>{{ $persona->nombrePersona}}
                                            {{ $persona->apeUnoPersona}}
                                            {{ $persona->apeDosPersona}}
                                        </td>
                                        <td>{{ $persona->generoPersona }}</td>
                                        <td>{{ $persona->semestrePersona }}</td>
                                        <td>{{ $persona->grupoPersona }}</td>
                                        <td>
                                            @if ($persona->statusPersona == "1")
                                                Activa
                                            @else
                                                Inactiva
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','persona.show')
                                                <a class="btn btn-info" href="{{ route('persona.show',$persona->id) }}">Show</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','persona.edit')
                                                <a class="btn btn-success" href="{{ route('persona.edit',$persona->id) }}">Edit</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','persona.destroy')
                                            <form action="{{ route('persona.destroy',$persona->id) }}" method="POST">
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
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <center><h3>No hay estudiantes registrados aun</h3></center>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $personas->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
