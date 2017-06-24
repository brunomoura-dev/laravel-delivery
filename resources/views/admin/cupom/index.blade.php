@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Cupoms</h3>
        <br>
        <a href="{{ route('admin.cupom.create') }}" class="btn btn-primary">novo cupom</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Valor</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cupoms as $cupom)
                <tr>
                    <td>{{ $cupom->id }}</td>
                    <td>{{ $cupom->code }}</td>
                    <td>{{ $cupom->value }}</td>
                    <td>
                        <a href="{{ route('admin.cupom.edit', $cupom->id) }}" class="btn btn-default">editar</a>
                        {!! Form::open(['route' => ['admin.cupom.destroy', $cupom->id], 'method' => 'delete', 'style' => 'display:inline-block !important']) !!}
                        {!! Form::submit('remover', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $cupoms->render() !!}
    </div>
@endsection