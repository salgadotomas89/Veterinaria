@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <ul class="nav nav-pills">
                            <li  class=""><a href="{{ url('/') }}">Mostrar Mascotas</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <tr>
                                <td>Raza</td>
                                <td>Caracter</td>
                                <td>Peso</td>
                                <td>Temperatura</td>
                            </tr>
                            @foreach($mascotas as $mascota)
                                <tr>
                                    <td>{{ $mascota->raza }}</td>
                                    <td>{{ $mascota->caracter }}</td>
                                    <td>{{ $mascota->peso }}</td>
                                    <td>{{ $mascota->temperatura }}</td>
                                    <td>
                                        edit
                                        |
                                        delete
                                    </td>
                                </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
                {{link_to_route('mascotas.create','agregar nueva mascota',null,['class'=>'btn btn-primary'])}}
            </div>
        </div>
    </div>
@endsection