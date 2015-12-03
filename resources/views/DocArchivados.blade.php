@extends('plantilla')

@section('contenido')
    <form action="">
        <div CLASS="form-group">
            <div>
                <i class="fa fa-search"></i>
                {!! Form::label('Busqueda') !!}
            </div>
            <div class="row">

                <div class="col-md-10">
                {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Iniciar busqueda'])!!}
                 </div>
            </div>
        </div>

        <br>
        <div CLASS="form-group">
            <i class="fa fa-file"></i>
            {!! Form::label('Tipo de Docuemnto') !!}
            <br>
            {!! Form::select('tipo_documento_id',$tipodocumento) !!}
        </div>
        <br>
        <div>
            {!! Form::submit('Buscar') !!}
        </div>
    </form>

@endsection
