@extends('plantilla')

@section('contenido')


<h3>{!! $documento->numero !!} - {!! $documento->asunto !!} </h3>
    {!! Form::open(['route'=>'documento.derivado','method'=>'POST','role'=>'form']) !!}

@foreach($oficinas as $oficina)
    {!!  Form::checkbox('oficina_id[]', $oficina->id) !!}
    {!! $oficina->nombre !!}
    <br>
@endforeach
{!! Form::hidden('documento_id',$documento->id) !!}
    {!! Form::submit('Derivar') !!}


       {!! Form::close() !!}
@endsection

