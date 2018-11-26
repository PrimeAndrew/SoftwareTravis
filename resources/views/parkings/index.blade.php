@extends('parkings.layout')

@section('content')

    <h1 class="text-center">Parkings</h1>


    <div class="container">

        <a class="btn btn-success mb-3" href="{{ route('parkings.create')  }}">Agregar Parqueos</a>

        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Espacios</th>
                <th scope="col">Abierto</th>
                <th scope="col">Cerrado</th>
                <th scope="col">Latitud</th>
                <th scope="col">Longitud</th>
                <th scope="col">Editar/Borrar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($parkings as $parking)
                <tr>
                    <th scope="row">{{ $parking->id}}</th>
                    <td>{{ $parking->parking_name }}</td>
                    <td>{{ $parking->parking_address}}</td>
                    <td>{{ $parking->total_spaces }}</td>
                    <td>{{ $parking->open_hour }}</td>
                    <td>{{ $parking->close_hour }}</td>
                    <td>{{ $parking->latitude }}</td>
                    <td>{{ $parking->longitud }}</td>
                    <td>
                        <a class="btn btn-info mb-1" href="{{ route('parkings.edit', $parking->id) }}">Editar</a>
                        <form action="{{ route('parkings.destroy', $parking->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('quiere eliminar?')">Borrar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $parkings -> links()  }}
    </div>




@endsection