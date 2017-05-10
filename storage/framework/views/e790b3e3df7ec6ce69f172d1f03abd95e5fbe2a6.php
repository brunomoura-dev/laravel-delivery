<div class="form-group">
    <?php echo Form::label('name', 'Nome: '); ?>

    <?php echo Form::text('user[name]', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('email', 'Email: '); ?>

    <?php echo Form::text('user[email]', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('phone', 'telefone: '); ?>

    <?php echo Form::text('phone', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('address', 'Endereço: '); ?>

    <?php echo Form::textarea('address', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('city', 'Cidade: '); ?>

    <?php echo Form::text('city', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('state', 'Estatdo: '); ?>

    <?php echo Form::text('state', null, ['class' => 'form-control']); ?>

</div>

<div class="form-group">
    <?php echo Form::label('zipcode', 'Cep: '); ?>

    <?php echo Form::text('zipcode', null, ['class' => 'form-control']); ?>

</div>

