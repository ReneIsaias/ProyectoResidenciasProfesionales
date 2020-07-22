@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Lista de Estudiantes</h2></div></center>
                <div class="card-body">
                @can('haveaccess','persona.create')
                    <a href="{{ route('persona.create') }}"
                        class="btn btn-primary float-right"
                        >
                        Crear
                    </a>
                    <br><br>
                @endcan
                    @include('custom.message')
                    <div class="table-responsive-xl">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th scope="col">Matricula</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Genero</th>
                                    <th scope="col">Semestre</th>
                                    <th scope="col">Grupo</th>
                                    <th scope="col">Estado</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($personas as $persona)
                                    <tr>
                                        <th scope="row">
                                            @isset( $persona->id )
                                                {{ $persona->id }}
                                            @endisset
                                        </th>
                                        <td>
                                            @isset( $persona->nombrePersona )
                                                {{ $persona->nombrePersona}}
                                                {{ $persona->apeUnoPersona}}
                                                {{ $persona->apeDosPersona}}
                                            @endisset
                                        </td>
                                        <td>
                                            @isset( $persona->generoPersona )
                                                {{ $persona->generoPersona }}
                                            @endisset
                                        </td>
                                        <td>
                                            @isset( $persona->semestrePersona )
                                                {{ $persona->semestrePersona }}
                                            @endisset
                                        </td>
                                        <td>
                                            @isset( $persona->grupoPersona )
                                                {{ $persona->grupoPersona }}
                                            @endisset
                                        </td>
                                        <td>
                                            @isset( $persona->statusPersona )
                                                @if ($persona->statusPersona == "1")
                                                    Activa
                                                @else
                                                    Inactiva
                                                @endif
                                            @endisset
                                        </td>
                                        <td>
                                            @can('haveaccess','persona.show')
                                                <a class="btn btn-info" href="{{ route('persona.show',$persona->id) }}">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','persona.edit')
                                                <a class="btn btn-success" href="{{ route('persona.edit',$persona->id) }}">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','persona.destroy')
                                            <form action="{{ route('persona.destroy',$persona->id) }}" method="POST">
                                            @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Borrar</button>
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
