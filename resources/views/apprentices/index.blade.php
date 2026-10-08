@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Aprendices</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="ps-4 py-3">ID</th>
                <th class="py-3">Nombre</th>
                <th class="py-3">Email / Celular</th>
                <th class="py-3">Curso</th>
                <th class="py-3">Computador</th>
                <th class="text-center py-3" style="width: 25%">Acciones de Gestión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($apprentices as $apprentice)
            <tr>
                <td>{{ $apprentice['id'] }}</td>
                <td>{{ $apprentice['name'] }}</td>
                <td>
                    <div>{{ $apprentice['email'] }}</div>
                    <div>{{ $apprentice['cell_number'] }}</div>
                </td>
                <td>
                    <span class="badge bg-light text-dark border px-3 py-2 rounded">
                        Ficha: {{ $apprentice['course_id'] ?? 'Sin Curso' }}
                    </span>
                </td>
                <td>
                    <span class="badge bg-dark-subtle text-dark border px-3 py-2 rounded">
                        Equipo N° {{ $apprentice['computer_id'] ?? 'Sin PC'}}
                    </span>
                </td>
                <td>
                    <a href="{{ route('apprentices.show', $apprentice['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection