@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Nova categoria</h3>
        <br>
        @include('erros._form_request')
        {!! Form::model($category, ['route' => ['admin.category.update', $category->id], 'method' => 'PUT'], ['class' => 'form']) !!}
        @include('admin.category._form')

        <div class="form-group">
            {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}


    </div>
@endsection