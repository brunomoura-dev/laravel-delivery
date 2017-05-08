@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Novo produto</h3>
        <br>
        @include('erros._form_request')
        {!! Form::open(['route' => 'admin.product.store'], ['class' => 'form']) !!}
        @include('admin.product._form')
        <div class="form-group">
            {!! Form::submit('criar produto', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}


    </div>
@endsection