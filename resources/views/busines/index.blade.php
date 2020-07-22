@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Lista de Empresas</h2></div></center>
                <div class="card-body">
                @can('haveaccess','busines.create')
                    <a href="{{ route('busines.create') }}"
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
                                    <th scope="col">Email</th>
                                    <th scope="col">Ciudad</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Sector(es)</th>
                                    <th scope="col">Estado</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($business as $busine)
                                    <tr>
                                        <th scope="row">{{ $busine->id }}</th>
                                        <td>{{ $busine->nameBusiness }}</td>
                                        <td>{{ $busine->emailBusiness }}</td>
                                        <td>{{ $busine->cityBusiness }}</td>
                                        <td>{{ $busine->phoneBusiness }}</td>
                                        <td>
                                            @isset( $busine->sector->descriptionSector )
                                                {{ $busine->sector->descriptionSector }}
                                            @endisset
                                        </td>
                                        <td>
                                            @if ($busine->statusBusines == "1")
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','busines.show')
                                                <a class="btn btn-info" href="{{ route('busines.show', $busine->id ) }}">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','busines.edit')
                                                <a class="btn btn-success" href="{{ route('busines.edit', $busine->id ) }}">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','busines.destroy')
                                            <form action="{{ route('busines.destroy', $busine->id ) }}" method="POST">
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
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>
                                    </tbody>
                                    </table>
                                    <center><h3>No hay empresas registradas aun</h3></center>
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
