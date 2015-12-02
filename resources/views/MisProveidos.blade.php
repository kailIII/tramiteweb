@extends('plantilla')

@section('contenido')
    <form action="">
        <div CLASS="form-group">
            <i class="fa fa-search"></i>
            {!! Form::label('Busqueda') !!}

            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Iniciar busqueda'])!!}
        </div>
        <br>
        <div CLASS="form-group">
            <i class="fa fa-file"></i>
            {!! Form::label('Tipo de Docuemnto') !!}
            <br>
            {!! Form::select('TipoDocumento',
                 array('Documentos' => 'Todos',
                                        'Carta',
                                        'Carta Circular',
                                        'Circular',
                                        'Informe',
                                        'Memorandum',
                                        'Memorandum Circular',
                                        'Oficio',
                                        'Oficio Circular',
                                        'Oficio Multiple',
                                        'Orden de Pago',
                                        'Sobre Cerrado',
                                        'Solicitud'))!!}
        </div>
        <br>
        <div>
            {!! Form::submit('Buscar!') !!}
        </div>
    </form>

@endsection
