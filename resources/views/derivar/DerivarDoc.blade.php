@extends('plantilla')

@section('contenido')
    {!! Form::open(['route'=>'documento.derivado','method'=>'POST','role'=>'form']) !!}

    @foreach($oficinas as $oficina)
        {!!  Form::checkbox('name', 'value') !!}
        {!! $oficina->nombre !!}

          <br>

          @endforeach

    {!! Form::submit('Derivar') !!}


       {!! Form::close() !!}
@endsection

