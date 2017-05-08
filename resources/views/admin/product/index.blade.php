@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Produtos</h3>
        <br>
        <a href="{{ route('admin.product.create') }}" class="btn btn-primary">novo produto</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-default">editar</a>
                        {!! Form::open(['route' => ['admin.product.destroy', $product->id], 'method' => 'delete', 'style' => 'display:inline-block !important']) !!}
                        {!! Form::submit('remover', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $products->render() !!}
    </div>
@endsection