@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Cursos</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="ps-4 py-3">ID</th>
                <th class="py-3">Número Curso</th>
                <th class="py-3">Días / Horario Asignado</th>
                <th class="py-3">Centro Formación</th>
                <th class="py-3">Ficha</th>
                <th class="py-3">Ambiente</th>
                <th class="text-center py-3" style="width: 30%">Acciones de Gestión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course['id'] }}</td>
                <td>{{ $course['course_number'] }}</td>
                <td>{{ $course['day'] }}</td>
                <td>{{ $course['training_center_id'] }}</td>
                <td>{{ $course['cohort_id'] }}</td>
                <td>{{ $course['environment_id'] }}</td>
                <td>
                    <a href="{{ route('courses.show', $course['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection