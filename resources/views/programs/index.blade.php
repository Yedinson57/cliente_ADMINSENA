@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Programas</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="ps-4 py-3">ID</th>
                <th class="py-3">Nombre</th>
                <th class="py-3" style="width:10%">Descripción</th>
                <th class="py-3">Tipo</th>
                <th class="py-3">Modalidad</th>
                <th class="py-3">Duración</th>
                <th class="py-3">Area</th>
                <th class="text-center py-3" style="width: 30%">Acciones de Gestión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programs as $program)
            <tr>
                <td>{{ $program['id'] }}</td>
                <td>{{ $program['name'] }}</td>
                <td>{{ $program['description'] }}</td>
                <td>{{ $program['type'] }}</td>
                <td>{{ $program['modality'] }}</td>
                <td>{{ $program['duration'] }}</td>
                <td>{{ $program['area_id'] }}</td>
                <td>
                    <a href="{{ route('programs.show', $program['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection