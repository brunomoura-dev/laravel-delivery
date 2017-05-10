<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Pedido #<?php echo e($order->id); ?></h1>
        <h2>Clinte: <?php echo e($order->client->user->name); ?></h2>
        <h4>data: <?php echo e($order->created_at); ?></h4>
        <p>
            <b>Entregar em:</b><br>
            <?php echo e($order->client->address); ?> - <?php echo e($order->client->city); ?> - <?php echo e($order->client->state); ?>

        </p>

        <?php echo $__env->make('erros._form_request', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo Form::model($order, ['route' => ['admin.order.update', $order->id], 'method' => 'PUT'], ['class' => 'form']); ?>

        <?php echo $__env->make('admin.order._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="form-group">
            <?php echo Form::submit('Atualizar', ['class' => 'btn btn-primary']); ?>

        </div>
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>