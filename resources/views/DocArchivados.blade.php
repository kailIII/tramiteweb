@extends('plantilla')

@section('contenido')
    {!! Form::open(['route'=>'buscarDocArchivados','method'=>'POST','role'=>'form']) !!}
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

         <table class="table table-hover table-striped table-bordered">
                <thead>
                <th>Nro</th>
                <th>Tipo</th>
                <th>Nro Doc</th>
                <th>Enviado Por</th>
                <th>Asunto</th>
                <th>Anexos</th>
                <th>Accion</th>
        </table>
        </br>
        </form>

@endsection
