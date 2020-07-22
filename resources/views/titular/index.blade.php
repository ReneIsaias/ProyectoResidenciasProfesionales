@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Lista de Titulares</h2></div></center>
                <div class="card-body">
                @can('haveaccess','titular.create')
                    <a href="{{ route('titular.create') }}"
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
                                    <th scope="col">Puesto(s)</th>
                                    <th scope="col">Estado</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($titulars as $titular)
                                    <tr>
                                        <th scope="row">{{ $titular->id }}</th>
                                        <td>{{ $titular->nameTitular }}
                                            {{ $titular->firstLastname }}
                                            {{ $titular->secondLastname }}
                                        </td>
                                        <td>{{ $titular->phoneTitular }}</td>
                                        <td>
                                            @isset( $titular->post->namePost )
                                                {{ $titular->post->namePost }}
                                            @endisset
                                        </td>
                                        <td>
                                            @if ($titular->statusTitular== "1")
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','titular.show')
                                                <a class="btn btn-info" href="{{ route('titular.show',$titular->id) }}">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','titular.edit')
                                                <a class="btn btn-success" href="{{ route('titular.edit',$titular->id) }}">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','titular.destroy')
                                            <form action="{{ route('titular.destroy',$titular->id) }}" method="POST">
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
                                    <center><h3>No hay titulares registrados aun</h3></center>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $titulars->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
