@extends('plantilla')

@section('contenido')
    {!! Form::open(['route'=>'documento.recepcionar','method'=>'POST','role'=>'form']) !!}

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
            @if($historicosDocumento)

                @foreach($historicosDocumento as $historicoDocumento)
                    <tr>
                    <td>{!! $historicoDocumento->id !!}</td>
                    <td>{!! $historicoDocumento->documento->tipoDocumento->descripcion !!}</td>
                    <td>{!! $historicoDocumento->documento->numero !!}</td>
                    <td>{!! $historicoDocumento->documento->oficina->nombre !!}</td>
                    <td>{!! $historicoDocumento->documento->asunto !!}</td>
                    <td>{!! $historicoDocumento->documento->anexo !!}</td>
                    <td>{!! Form::submit('Proveido') !!} </td>
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