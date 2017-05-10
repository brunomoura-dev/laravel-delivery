<?php $__env->startSection('content'); ?>
    <div class="container">
        <h3>Categorias</h3>
        <br>
        <a href="<?php echo e(route('admin.category.create')); ?>" class="btn btn-primary">nova categoria</a>
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
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($category->id); ?></td>
                    <td><?php echo e($category->name); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.category.edit', $category->id)); ?>" class="btn btn-default">editar</a>
                        <?php echo Form::open(['route' => ['admin.category.destroy', $category->id], 'method' => 'delete', 'style' => 'display:inline-block !important']); ?>

                        <?php echo Form::submit('remover', ['class' => 'btn btn-default']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo $categories->render(); ?>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>