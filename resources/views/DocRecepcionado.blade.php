@extends('plantilla')

@section('contenido')
    <form>
        <div CLASS="form-group">
            {!! Form::label('Busqueda') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Iniciar busqueda'])!!}
        </div>
          <div ClASS="form-group">
                {!! Form::submit ('Buscar') !!}
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
                </tr>

                @if($documentos)

                    @foreach($documentos as $documento)
                        <tr>
                           <!-- <td>{!! $documento->id !!}</td>
                            <td>{!! $documento->TipoDocumento->descripcion !!}</td>
                            <td>{!! $documento->numero !!}</td>
                            <td>{!! $documento->Oficina->nombre  !!}</td>
                            <td>{!! $documento->asunto !!}</td>
                            <td>{!! $documento->anexos !!}</td>
                            <td> {!! Form::submit('Recepcionar') !!}</td> -->
                        </tr>
                    @endforeach

                @else
                    <tr>
                        <td>No Se Encontraron Registros</td>
                    </tr>
                @endif

            </table>
    </form>
@endsection