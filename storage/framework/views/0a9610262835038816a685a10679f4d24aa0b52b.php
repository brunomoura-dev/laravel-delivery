<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Produtos</h3>
        <br>
        <a href="<?php echo e(route('admin.product.create')); ?>" class="btn btn-primary">novo produto</a>
        <br>
        <br>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->category->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.product.edit', $product->id)); ?>" class="btn btn-default">editar</a>
                        <?php echo Form::open(['route' => ['admin.product.destroy', $product->id], 'method' => 'delete', 'style' => 'display:inline-block !important']); ?>

                        <?php echo Form::submit('remover', ['class' => 'btn btn-default']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo $products->render(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>