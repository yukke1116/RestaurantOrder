<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>１か月ごとの売上</title>
    <link rel="stylesheet" href="css/layout.css">
    <style type="text/css">
    @font-face {
        font-family: migmix;
        font-style: normal;
        font-weight: normal;
        src: url('<?php echo e(storage_path('fonts/migmix-2p-regular.ttf')); ?>') format('truetype');
    }
    @font-face {
        font-family: migmix;
        font-style: bold;
        font-weight: bold;
        src: url('<?php echo e(storage_path('fonts/migmix-2p-bold.ttf')); ?>') format('truetype');
    }
    body {
        font-family: migmix !important;
    }
    h1 {
        font-size: 50px;
        text-align: center;
    }
    table {
        margin: 0 auto;
        font-size: 20px;
        width: 100%;
    }
   </style>
</head>
<body>
    <h1>１か月ごとの売上</h1>
    <table border="1">
        <thead>
            <tr>
                <th>月</th>
                <th>売上</th>
            </tr>
        </thead>
        <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr>
                <td><?php echo e($val -> time); ?></td>
                <td><?php echo e($val -> sum); ?>円</td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/sales/sales/pdfPerMonthSales.blade.php ENDPATH**/ ?>