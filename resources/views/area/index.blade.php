@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Areas</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area['id'] }}</td>
                        <td>{{ $area['name'] }}</td>
                        <td>
                            <a href="{{ route('area.show', $area['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection