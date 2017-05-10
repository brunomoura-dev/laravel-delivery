<div class="form-group">
    <?php echo Form::label('status', 'Status: '); ?>

    <?php echo Form::select('status', $status, null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('deliveryman', 'Motoboy: '); ?>

    <?php echo Form::select('user_deliveryman_id', $deliverymans, null, ['class' => 'form-control']); ?>

</div>

