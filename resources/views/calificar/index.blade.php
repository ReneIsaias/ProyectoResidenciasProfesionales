@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-dark text-white"><h2>Lista de proyectos a calificar</h2></div>
                <div class="card-body">
                @can('haveaccess','calificar.create')
                    <a href="{{ route('calificar.create') }}"
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
                                    <th scope="col">#</th>
                                    <th scope="col">Proyecto</th>
                                    <th scope="col">Residente</th>
                                    <th scope="col">calificacion</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($calificars as $califica)
                                    <tr>
                                        <th scope="row">{{ $califica->id }}</th>
                                        <td>
                                            @isset( $califica->proyects->id )
                                                {{ $califica->proyects->nameProyect }}
                                            @endisset
                                        </td>
                                        <td>
                                            @isset( $califica->users->id )
                                                {{ $califica->users->nameUser }} {{ $califica->users->firstLastname }} {{ $califica->users->secondLastname }}
                                            @endisset
                                        </td>
                                        <td>
                                            @isset( $califica->calification )
                                                {{ $califica->calification }}
                                            @endisset
                                        </td>
                                        <td>
                                            @can('haveaccess','calificar.show')
                                                <a class="btn btn-info" href="{{ route('calificar.show',$califica->id) }}">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','calificar.edit')
                                                <a class="btn btn-success" href="{{ route('calificar.edit',$califica->id) }}">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','calificar.destroy')
                                            <form action="{{ route('calificar.destroy',$califica->id) }}" method="POST">
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
                                    </tr>
                                    </tbody>
                                    </table>
                                    <center><h3>No hay calificaciones de proyectos registrados</h3></center>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $calificars->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
