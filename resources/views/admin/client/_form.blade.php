<div class="form-group">
    {!! Form::label('name', 'Nome: ') !!}
    {!! Form::text('user[name]', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email: ') !!}
    {!! Form::text('user[email]', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('phone', 'telefone: ') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('address', 'Endereço: ') !!}
    {!! Form::textarea('address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('city', 'Cidade: ') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('state', 'Estatdo: ') !!}
    {!! Form::text('state', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('zipcode', 'Cep: ') !!}
    {!! Form::text('zipcode', null, ['class' => 'form-control']) !!}
</div>

