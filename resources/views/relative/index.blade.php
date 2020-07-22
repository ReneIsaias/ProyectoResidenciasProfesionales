@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Lista de Familiares</h2></div></center>
                <div class="card-body">
                @can('haveaccess','relative.create')
                    <a href="{{ route('relative.create') }}"
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
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Parentesco</th>
                                    <th scope="col">Estado</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($relatives as $relative)
                                    <tr>
                                        <th scope="row">{{ $relative->id }}</th>
                                        <td>{{ $relative->nameRelative}}
                                            {{ $relative->firstLastname}}
                                            {{ $relative->secondLastname}}
                                        </td>
                                        <td>{{ $relative->phoneRelative }}</td>
                                        <td>
                                            @isset( $relative->typefamily->descriptionType )
                                                {{ $relative->typefamily->descriptionType }}
                                            @endisset
                                        </td>
                                        <td>
                                            @if ($relative->statusRelative == "1")
                                                Activa
                                            @else
                                                Inactiva
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','relative.show')
                                                <a class="btn btn-info" href="{{ route('relative.show',$relative->id) }}">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','relative.edit')
                                                <a class="btn btn-success" href="{{ route('relative.edit',$relative->id) }}">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','relative.destroy')
                                            <form action="{{ route('relative.destroy',$relative->id) }}" method="POST">
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
                                    <center><h3>No hay familiares registrados aun</h3></center>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $relatives->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
