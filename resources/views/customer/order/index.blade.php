@extends('layouts.app')
@section('content')

    <div class="container">
        <h3>Meus pedidos</h3>
        <p><a href="{{ route('customer.order.create') }}" class="btn btn-default">novo pedido</a></p>
        <table class="table table-bordered">
            <thead>
            <tr class="td">ID</tr>
            <tr class="td">Total</tr>
            <tr class="td">Status</tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->total }}</td>
                    <td>{{ $order->status }}</td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $orders->links() !!}
    </div>
@endsection