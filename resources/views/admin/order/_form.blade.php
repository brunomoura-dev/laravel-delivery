<div class="form-group">
    {!! Form::label('status', 'Status: ') !!}
    {!! Form::select('status', $status, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('deliveryman', 'Motoboy: ') !!}
    {!! Form::select('user_deliveryman_id', $deliverymans, null, ['class' => 'form-control']) !!}
</div>

