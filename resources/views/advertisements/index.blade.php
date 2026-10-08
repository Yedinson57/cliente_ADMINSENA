@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Lista de Anuncios</h1>

    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th class="ps-4 py-3">ID</th>
                <th class="py-3">Titulo</th>
                <th class="py-3">Categoria</th>
                <th class="py-3">Fecha de publicación</th>
                <th class="py-3">Autor</th>
                <th class="py-3">Resumen</th>
                <th class="py-3" style="width:40%">Contenido</th>
                <th class="py-3">Centro</th>
                <th class="text-center py-3" style="width: 25%">Acciones de Gestión</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($advertisements as $advertisement)
            <tr>
                <td>{{ $advertisement['id'] }}</td>
                <td>{{ $advertisement['title'] }}</td>
                <td>{{ $advertisement['category'] }}</td>
                <td>{{ $advertisement['publish_date'] }}</td>
                <td>{{ $advertisement['author'] }}</td>
                <td>{{ $advertisement['summary'] }}</td>
                <td>{{ $advertisement['content'] }}</td>
                <td>{{ $advertisement['training_center_id'] ?? 'No asignada' }}</td>
                <td>
                    <a href="{{ route('advertisements.show', $advertisement['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection