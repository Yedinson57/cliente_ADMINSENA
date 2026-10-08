@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Instructores</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="ps-4 py-3">ID</th>
                <th class="py-3">Nombre</th>
                <th class="py-3">Email</th>
                <th class="py-3">Área</th>
                <th class="py-3">Centro de Formación</th>
                <th class="text-center py-3" style="width: 30%">Acciones de Gestión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>{{ $teacher['id'] }}</td>
                <td>{{ $teacher['name'] }}</td>
                <td>{{ $teacher['email'] }}</td>
                <td>{{ $teacher['area_id'] }}</td>
                <td>{{ $teacher['training_center_id'] }}</td>
                <td>
                    <a href="{{ route('teachers.show', $teacher['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection