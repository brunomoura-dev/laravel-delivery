@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Editando Cliente</h3>
        <br>
        @include('erros._form_request')
        {!! Form::model($client, ['route' => ['admin.client.update', $client->id], 'method' => 'PUT'], ['class' => 'form']) !!}
        @include('admin.client._form')

        <div class="form-group">
            {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection