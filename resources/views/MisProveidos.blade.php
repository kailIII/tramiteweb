@extends('plantilla')

@section('contenido')
    {!! Form::open(['route'=>'buscarProveidos','method'=>'POST','role'=>'form']) !!}
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
            {!! Form::select('tipo_documento_id',$tipodocumento) !!}
        </div>
        <br>
        <div>
            {!! Form::submit('Buscar') !!}
        </div>
        <tr>
            <table class="table table-hover table-striped table-bordered">
                <thead>
                <th>Nro</th>
                <th>Tipo</th>
                <th>Nro Doc</th>
                <th>Enviado Por</th>
                <th>Asunto</th>
                <th>Anexos</th>
                <th>Accion</th>
                </thead>
                <tr>
                <td>1</td>
                <td>Informe</td>
                <td>1231-616-2</td>
                <td>Sistemas</td>
                <td>Algun asunto</td>
                <td></td>
                <td>Eliminar | Ver</td>
            </tr>
        </tr>
            </table>
    </form>
@endsection
