@extends('plantilla')

@section('contenido')
    <form action="">
    <div CLASS="form-group">
        {!! Form::label('Busqueda') !!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Iniciar busqueda'])!!}
    </div>
    <div CLASS="form-group">
        {!! Form::label('Tipos de Docuemnto') !!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Tipos de documentos'])!!}

    </div>
    </form>
@endsection
