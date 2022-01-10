

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<table border="1">
        <tr>
            <td>Marca</td>
            <td><?php echo e($zapatilla->getMarca()); ?></td>
        </tr>
        <tr>
            <td>Modelo</td>
            <td><?php echo e($zapatilla->getModelo()); ?></td>
        </tr>
        <tr>
            <td>Tipo</td>
            <td><?php echo e($zapatilla->getTipo()); ?></td>
        </tr>
        <tr>
            <td>Precio</td>
            <td><?php echo e($zapatilla->getPrecio()); ?></td>
        </tr>
    </table>
    <a href="../index.php">Volver a la pagina</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/cont', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /vagrant/07-Motor-dePlantillas/Ejer6/views/listado.blade.php ENDPATH**/ ?>