<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php if($informal): ?>
        Hola mundo!
    <?php else: ?> 
        Buenos días mundo!
    <?php endif; ?>
    </h1>
    <?php echo e($informal); ?>


    <h2>Lista de números</h2>
    <?php $__currentLoopData = $numeros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $numero): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>Número <?php echo e($numero); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH /var/www/html/resources/views/prueba/saludo.blade.php ENDPATH**/ ?>