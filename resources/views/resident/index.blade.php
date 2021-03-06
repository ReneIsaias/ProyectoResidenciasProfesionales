@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Lista de Residentes</h2></div></center>
                <div class="card-body">
                @can('haveaccess','resident.create')
                    <a href="{{ route('resident.create') }}"
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
                                    <th scope="col">Matricula</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telfono</th>
                                    <th scope="col">Carrera(s)</th>
                                    <th scope="col">Estado</th>
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
                                        <td>
                                            @isset( $resident->career->careerName )
                                                {{ $resident->career->careerName }}
                                            @endisset
                                        </td>
                                        <td>
                                            @if ($resident->statusResident == "1")
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','resident.show')
                                                <a class="btn btn-info" href="{{ route('resident.show', $resident->id ) }}">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','resident.edit')
                                                <a class="btn btn-success" href="{{ route('resident.edit', $resident->id ) }}">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','resident.destroy')
                                            <form action="{{ route('resident.destroy', $resident->id ) }}" method="POST">
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
                                    <center><h3>No hay residentes registrados aun</h3></center>
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
