@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ul class="nav nav-pills">
                        <li  class=""><a href="{{ url('/') }}">Ver Rut</a></li>
                        <li  class=""><a href="{{ url('/register') }}">Crear usuario</a></li>
                        <li  class=""><a href="{{ url('mascotas') }}">ver mascotas</a></li>

                    </ul>
                </div>

                <div class="panel-body">
                    welcome a su panel
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
