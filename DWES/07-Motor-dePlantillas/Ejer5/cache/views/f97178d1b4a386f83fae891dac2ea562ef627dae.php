

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <table border="1">
        <tr>
            <td>Marca</td>
            <td>Modelo</td>
            <td>Tipo</td>
            <td>Precio</td>
        </tr>
        <?php $__currentLoopData = $zapatillas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zapatilla): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($zapatilla->getMarca()); ?></td>
            <td><?php echo e($zapatilla->getModelo()); ?></td>
            <td><?php echo e($zapatilla->getTipo()); ?></td>
            <td><?php echo e($zapatilla->getPrecio()); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/cont', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /vagrant/07-Motor-dePlantillas/Ejer5/views/zapatos.blade.php ENDPATH**/ ?>