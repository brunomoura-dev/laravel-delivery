<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Novo cliente</h3>
        <br>
        <?php echo $__env->make('erros._form_request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo Form::open(['route' => 'admin.client.store'], ['class' => 'form']); ?>

        <?php echo $__env->make('admin.client._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="form-group">
            <?php echo Form::submit('criar cliente', ['class' => 'btn btn-primary']); ?>

        </div>
        <?php echo Form::close(); ?>


    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>