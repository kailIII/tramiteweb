@extends('plantilla')

@section('contenido')
    <form action="">
        <div CLASS="form-group">
            {!! Form::label('Tipos de Docuemnto') !!}
            {!! Form::select('TipoDeDocumentos',

            array('documentos'=> 'Seleccionar',

            'Cartra',
            'Carta Circular',
            'Circular',
            'Informe',
            'Memorandun',
            'Memorandun Circular',
            'Oficina',
            'Oficina Circular',
            'Oficina Multiple',
            'Orden De Pago',
            'Sobre Cerrado',
            'Solicitud'))!!}

            </div>




        <div CLASS="form-group">

                {!! Form::label('Nro de Documento') !!}
                    <div class="row">
                        <div class="col-md-4">
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nro de Documento'])!!}
            </div>
            <div class="col-md-8">
            -15-05-Emapa Cañete S.A
            </div>
            </div>
        </div>

        <div CLASS="form-group">
            {!! Form::label('Asunto') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Asunto'])!!}
        </div>
        <div CLASS="form-group">
            {!! Form::label('Anexos') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Anexos'])!!}
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
    </form>
@endsection
