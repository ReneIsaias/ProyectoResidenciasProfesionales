@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <center><div class="card-header bg-dark text-white"><h2>Lista de Reportes</h2></div></center>
                <div class="card-body">
                @can('haveaccess','report.create')
                    <a href="{{ route('report.create') }}"
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
                                    <th scope="col">Archivo(s)</th>
                                    <th scope="col">Estado</th>
                                    <th colspan="3"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reports as $report)
                                    <tr>
                                        <th scope="row">{{ $report->id }}</th>
                                        <td>{{ $report->nameReport }}</td>
                                        <td>
                                            @isset( $report->typefile->descriptionFile )
                                                {{ $report->typefile->descriptionFile }}
                                            @endisset
                                        </td>
                                        <td>
                                            @if ($report->statusReport == "1")
                                                Activo
                                            @else
                                                Inactivo
                                            @endif
                                        </td>
                                        <td>
                                            @can('haveaccess','report.show')
                                                <a class="btn btn-info" href="{{ route('report.show',$report->id) }}">Ver</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','report.edit')
                                                <a class="btn btn-success" href="{{ route('report.edit',$report->id) }}">Editar</a>
                                            @endcan
                                        </td>
                                        <td>
                                            @can('haveaccess','report.destroy')
                                            <form action="{{ route('report.destroy',$report->id) }}" method="POST">
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
                                    <center><h3>No hay reportes registrados aun</h3></center>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            {{ $reports->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
