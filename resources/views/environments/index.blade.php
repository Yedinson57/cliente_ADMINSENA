@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1 class="mb-4">Lista de Ambientes</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="ps-4 py-3">ID</th>
                <th class="py-3">Nombre</th>
                <th class="py-3">Ubicación</th>
                <th class="py-3">Centro</th>
                <th class="text-center py-3" style="width: 30%">Acciones de Gestión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($environments as $environment)
            <tr>
                <td>{{ $environment['id'] }}</td>
                <td>{{ $environment['name'] }}</td>
                <td>{{ $environment['location'] }}</td>
                <td>{{ $environment['training_center_id'] }}</td>
                <td>
                    <a href="{{ route('environments.show', $environment['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection