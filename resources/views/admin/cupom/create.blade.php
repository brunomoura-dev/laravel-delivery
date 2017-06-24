@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Nova categoria</h3>
        <br>
        @include('erros._form_request')
        {!! Form::open(['route' => 'admin.cupom.store'], ['class' => 'form']) !!}
        @include('admin.cupom._form')
        <div class="form-group">
            {!! Form::submit('criar cupom', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}


    </div>
@endsection