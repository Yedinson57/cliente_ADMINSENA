@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Ofertas</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="ps-4 py-3">ID</th>
                <th class="py-3">Jornada</th>
                <th class="py-3">Fecha de Inscripcion</th>
                <th class="py-3">Capacidad</th>
                <th class="py-3">Programa</th>
                <th class="text-center py-3" style="width: 30%">Acciones de Gestión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
            <tr>
                <td>{{ $offer['id'] }}</td>
                <td>{{ $offer['day'] }}</td>
                <td>{{ $offer['registration_date'] }}</td>
                <td>{{ $offer['capacity'] }}</td>
                <td>{{ $offer['program_id'] }}</td>
                <td>
                    <a href="{{ route('offers.show', $offer['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection