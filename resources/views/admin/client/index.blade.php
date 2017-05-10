@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Usuários</h3>
        <br>
        <a href="{{ route('admin.client.create') }}" class="btn btn-primary">novo cliente</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->user->name }}</td>
                    <td>
                        <a href="{{ route('admin.client.edit', $client->id) }}" class="btn btn-default">editar</a>
                        {!! Form::open(['route' => ['admin.client.destroy', $client->id], 'method' => 'delete', 'style' => 'display:inline-block !important']) !!}
                        {!! Form::submit('remover', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $clients->render() !!}
    </div>
@endsection