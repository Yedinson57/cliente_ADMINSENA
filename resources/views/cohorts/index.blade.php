@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Fichas</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="ps-4 py-3">ID</th>
                <th class="py-3">Numero de Ficha</th>
                <th class="py-3">Fecha de Inicio</th>
                <th class="py-3">Cronograma</th>
                <th class="py-3">Oferta</th>
                <th class="text-center py-3" style="width: 30%">Acciones de Gestión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cohorts as $cohort)
            <tr>
                <td>{{ $cohort['id'] }}</td>
                <td>{{ $cohort['code'] }}</td>
                <td>{{ $cohort['start_date'] }}</td>
                <td>{{ $cohort['schedule'] }}</td>
                <td>{{ $cohort['offer_id'] }}</td>
                <td class="text-center">
                    <a href="{{ route('cohorts.show', $cohort['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection