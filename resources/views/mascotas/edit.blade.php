@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <ul class="nav nav-pills">
                            <li  class=""><a href="{{ url('/') }}">Editar mascota</a></li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($mascota,array('route'=>['mascotas',$mascota->id],'method'=>'PUT')) !!}                        <div class="form-group">
                            {!! Form::label('rut','ingrese el rut') !!}
                            {!! Form::text('rut',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('especie','ingrese la especie') !!}
                            {!! Form::text('especie',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('raza','ingrese la raza') !!}
                            {!! Form::text('raza',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('caracter','ingrese el caracter') !!}
                            {!! Form::text('caracter',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('fecha','ingrese la fecha de nacimiento') !!}
                            {!! Form::text('fecha',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('peso','ingrese el peso') !!}
                            {!! Form::text('peso',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('temperatura','ingrese la temperatura') !!}
                            {!! Form::text('temperatura',null,['class'=>'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('actualizar',['type'=>'submit','class'=>'btn btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection