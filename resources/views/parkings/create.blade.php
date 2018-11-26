@extends('parkings.layout')

@section('content')
    <h1 class="text-center">Agregar Parqueos</h1>
    <hr>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="container mb-5" >
        <form action="{{ route('parkings.store') }}" method="POST">
            @csrf

            <div class="row">

                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Nombre:</strong>
                        <input type="text" name="parking_name" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Direccion:</strong>
                        <textarea class="form-control"  name="parking_address" placeholder="Direccion"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Espacios:</strong>
                        <input type="text" name="total_spaces" class="form-control" placeholder="Espacios"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Hora abierto:</strong>
                        <input type="text" name="open_hour" class="form-control" placeholder="hora abierto"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Hora cerrado:</strong>
                        <input type="text" name="close_hour" class="form-control" placeholder="hora cerrado"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Latitud:</strong>
                        <input type="text" name="latitude" class="form-control" placeholder="latitud"></input>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Longitud:</strong>
                        <input type="text" name="longitud" class="form-control" placeholder="longitud"></input>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-primary mb-5">Enviar</button>
                </div>
            </div>

        </form>
    </div>

@endsection