@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Centros de Formación</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainingcenters as $trainingcenter)
                    <tr>
                        <td>{{ $trainingcenter['id'] }}</td>
                        <td>{{ $trainingcenter['name'] }}</td>
                        <td>{{ $trainingcenter['location'] }}</td>
                        <td>
                            <a href="{{ route('trainingcenters.show', $trainingcenter['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection