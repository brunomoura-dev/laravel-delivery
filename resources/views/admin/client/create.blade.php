@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Novo cliente</h3>
        <br>
        @include('erros._form_request')
        {!! Form::open(['route' => 'admin.client.store'], ['class' => 'form']) !!}
        @include('admin.client._form')
        <div class="form-group">
            {!! Form::submit('criar cliente', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}

    </div>
@endsection