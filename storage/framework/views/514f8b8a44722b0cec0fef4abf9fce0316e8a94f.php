<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Pedidos</h3>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Total</th>
                <th>Data</th>
                <th>Itens</th>
                <th>Entregador</th>
                <th>Status</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>#<?php echo e($order->id); ?></td>
                    <td>R$<?php echo e($order->total); ?></td>
                    <td><?php echo e($order->created_at); ?></td>
                    <td>
                        <ul>
                        <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($item->product->name); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </td>
                    <td><?php echo e($order->deliveryman->name ?? '--'); ?></td>
                    <td><?php echo e($order->status); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.order.edit', $order->id)); ?>" class="btn btn-default">editar</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo $orders->render(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>