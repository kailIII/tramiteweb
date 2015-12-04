@extends('plantilla')

@section('contenido')
    <form action="">

        <table class="table table-bordered table-hover table-striped">
            <thead>
            <tr>
            <th>Nro</th>
            <th>Tipo</th>
            <th>Nro Doc</th>
            <th>Enviado por</th>
            <th>Asuntos</th>
            <th>Anexos</th>
            <th>Accion</th>
            </thead>
            </tr>
            @if($documentos)

                @foreach($documentos as $documento)
                    <tr>
                    <td>{!! $documento->id !!}</td>
                    <td>{!! $documento->TipoDocumento->descripcion !!}</td>
                    <td>{!! $documento->numero !!}</td>
                    <td>{!! $documento->Oficina->nombre  !!}</td>
                    <td>{!! $documento->asunto !!}</td>
                    <td>{!! $documento->anexos !!}</td>
                    <td> {!! Form::submit('Recepcionar') !!}</td>
                    </tr>
                @endforeach


            @else
            <tr>
                <td>No Se Encontraron Registros</td>
            </tr>
              @endif
            <br>
        </table>

    </form>
@endsection