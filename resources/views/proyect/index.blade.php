@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Lista de Proyectos de Residencia</h2></div></center>
                <div class="card-body">
                @can('haveaccess','proyect.create')
                    <a href="{{ route('proyect.create') }}"
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
                                    <th scope="col">Empresa(s)</th>
                                    <th scope="col">Residente(s)</th>
                                    <th scope="col">Estado</th>
                                    <th colspan="4"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($proyects as $proyect)
                                    <tr>
                                        <th scope="row">{{ $proyect->id }}</th>
                                        <td>{{ $proyect->nameProyect }}</td>
                                        <td>{{ $proyect->dateStart }}</td>
                                        <td>{{ $proyect->dateEnd }}</td>
                                        <td>
                                            @isset( $proyect->busine->nameBusiness )
                                                {{ $proyect->busine->nameBusiness }}
                                            @endisset
                                        </td>
                                        <td>
                                            @isset( $proyect->resident->nameResident )
                                                {{ $proyect->resident->nameResident }} {{ $proyect->resident->firtsLastnameResident }} {{ $proyect->resident->secondLastnameResident }}
                                            @endisset
                                        </td>
                                        <td>
                                            @if ($proyect->statusProject == "1")
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','proyect.show')
                                                <a class="btn btn-info" href="{{ route('proyect.show',$proyect->id ) }}">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','proyect.edit')
                                                <a class="btn btn-success" href="{{ route('proyect.edit',$proyect->id ) }}">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','project.export')
                                                <a class="btn btn-info" href="{{ route('project.export',$proyect->id ) }}">Descargar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','proyect.destroy')
                                            <form action="{{ route('proyect.destroy',$proyect->id) }}" method="POST">
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
                                    <center><h3>No hay proyectos registrados aun</h3></center>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $proyects->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
