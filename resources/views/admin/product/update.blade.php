@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Atualizar produto</h3>
        <br>
        @include('erros._form_request')
        {!! Form::model($product, ['route' => ['admin.product.update', $product->id], 'method' => 'PUT'], ['class' => 'form']) !!}
        @include('admin.product._form')

        <div class="form-group">
            {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}


    </div>
@endsection