@extends('plantilla')

@section('contenido')
    <form action="">
        <div CLASS="form-group">
            {!! Form::label('Busqueda') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Iniciar busqueda'])!!}
        </div>
          <div ClASS="form-group">
                {!! Form::Button ('Buscar') !!}
            </div>
            <table class="table table-hover table-striped table-bordered">
                <thead>
                <td>Nro</td>
                <td>Tipo</td>
                <td>Nro Doc</td>
                <td>Enviado Por</td>
                <td>Asunto</td>
                <td>Anexos</td>
                <td>Accion</td>
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
                <tr>
                    <td>2</td>
                    <td>Memorandum</td>
                    <td>5555</td>
                    <td>Contabildad</td>
                    <td>recomendaciones</td>
                    <td>Cd</td>
                    <td>Eliminar | Ver</td>
                </tr>
            </table>
    </form>
@endsection