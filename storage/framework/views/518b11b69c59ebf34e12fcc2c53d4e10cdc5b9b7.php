<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo asset("bootstrap-3.3.7-dist/css/bootstrap.css"); ?>">
    <script src="<?php echo asset("bootstrap-3.3.7-dist/js/jquery-3.3.1.js"); ?>"></script>
    <script src="<?php echo asset("bootstrap-3.3.7-dist/js/bootstrap.js"); ?>"></script>
    <link rel="stylesheet" href="<?php echo asset("style.css"); ?>">
    <title>Sàn giao dịch nông sản</title>
</head>
<body>
<table>
    <tr><th>ID</th></tr>
    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
    <td><?php echo e($data->id); ?></td>
        </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<div class="container">
<?php echo e($brands->links()); ?>

</div>
</body>