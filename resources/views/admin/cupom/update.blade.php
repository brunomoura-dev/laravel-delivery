@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Editando cupom</h3>
        <br>
        @include('erros._form_request')
        {!! Form::model($cupom, ['route' => ['admin.cupom.update', $cupom->id], 'method' => 'PUT'], ['class' => 'form']) !!}
        @include('admin.cupom._form')

        <div class="form-group">
            {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}


    </div>
@endsection