@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <ul class="nav nav-pills">
                            <li  class=""><a href="{{ url('/usuario') }}">Volver</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        {!! Form::open(array('route'=>'usuario.store')) !!}
                        <div class="form-group">
                            {!! Form::label('nombre','ingrese el nombre') !!}
                            {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('correo','ingrese el email') !!}
                            {!! Form::text('email',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('contraseña','ingrese la contraseña') !!}
                            {!! Form::text('password',null,['class'=>'form-control']) !!}
                        </div>


                        <div class="form-group">
                            {!! Form::button('crear',['type'=>'submit','class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection