@extends('plantilla')

@section('contenido')
    <form action="">
        <div CLASS="form-group">
            <div CLASS="row">
                <div class="col-md-8">
                    <i class="fa fa-search"></i>
                    {!! Form::label('Busqueda:') !!}
                    {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Iniciar busqueda'])!!}
                </div>
            </div>
        </div>

        <div class="form-group">

            <i class="fa fa-file-text"></i>
            {!!  Form::label('Tipos de documetos') !!}
            {!!  Form::select('TiposDocumetos',
                array('documentos'=> 'Seleccionar',
                    'Carta',
                    'Carta circular',
                    'Circular',
                    'Informe',
                    'Memorandum',
                    'Memorandum Circular',
                    'Oficina',
                    'Oficina Circular',
                    'Oficina multiple',
                    'Orden de pago',
                    'Sobre cerrado',
                    'Solicitud'))!!}
        </div>

    </form>
    <div>
        {!! form::submit('buscar') !!}
    </div>
@endsection
