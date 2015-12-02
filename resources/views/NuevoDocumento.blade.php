@extends('plantilla')

@section('contenido')
    {!! Form::open(['route'=>'documento.grabar','method'=>'POST','role'=>'form']) !!}
        <div CLASS="form-group">
            {!! Form::label('Tipos de Documento') !!}
            {!! Form::select('tipo_documento_id',

            array('0'=> 'Seleccionar',

            '1'=>'Cartra',
            '2'=>'Carta Circular',
            '3'=>'Circular',
            ))!!}

            </div>




        <div CLASS="form-group">

                {!! Form::label('Nro de Documento') !!}
                    <div class="row">
                        <div class="col-md-4">
                {!! Form::text('numero',null,['class'=>'form-control','placeholder'=>'Nro de Documento'])!!}
            </div>
            <div class="col-md-8">
            -15-05-Emapa Cañete S.A
            </div>
            </div>
        </div>

        <div CLASS="form-group">
            {!! Form::label('Asunto') !!}
            {!! Form::text('asunto',null,['class'=>'form-control','placeholder'=>'Asunto'])!!}
        </div>
        <div CLASS="form-group">
            {!! Form::label('Anexos') !!}
            {!! Form::text('anexos',null,['class'=>'form-control','placeholder'=>'Anexos'])!!}
        </div>
        <div CLASS="form-group">
            {!! Form::label('Subir Archivo PDF') !!}
        </div>


        <div>

            {!! Form::submit('Seleccionar Archivo') !!}
        </div>
        <br>

        <div>

            {!! Form::submit('Grabar') !!}
        </div>
    {!! Form::close() !!}
@endsection
