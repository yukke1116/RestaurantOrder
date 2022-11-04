<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Restaurant Order</title>
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>
    <header>
        <?php echo $__env->make('restaurant.header.headerCustomer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <?php echo $__env->yieldContent('content'); ?>
    <footer>
        <?php echo $__env->make('restaurant.footer.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/layout/layoutCustomer.blade.php ENDPATH**/ ?>