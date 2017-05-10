@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pedido #{{ $order->id}}</h1>
        <h2>Clinte: {{ $order->client->user->name }}</h2>
        <h4>data: {{ $order->created_at }}</h4>
        <p>
            <b>Entregar em:</b><br>
            {{ $order->client->address }} - {{ $order->client->city }} - {{ $order->client->state }}
        </p>

        @include('erros._form_request')
        {!! Form::model($order, ['route' => ['admin.order.update', $order->id], 'method' => 'PUT'], ['class' => 'form']) !!}
        @include('admin.order._form')

        <div class="form-group">
            {!! Form::submit('Atualizar', ['class' => 'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection