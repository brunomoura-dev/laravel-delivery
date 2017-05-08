@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Categorias</h3>
        <br>
        <a href="{{ route('admin.category.create') }}" class="btn btn-primary">nova categoria</a>
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
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-default">editar</a>
                        {!! Form::open(['route' => ['admin.category.destroy', $category->id], 'method' => 'delete', 'style' => 'display:inline-block !important']) !!}
                        {!! Form::submit('remover', ['class' => 'btn btn-default']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $categories->render() !!}
    </div>
@endsection