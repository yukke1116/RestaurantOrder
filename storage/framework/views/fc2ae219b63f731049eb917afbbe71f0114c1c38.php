<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Restaurant Order</title>
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>
    <header>
        <?php echo $__env->make('restaurant.header.headerBefore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\2022_PHP自作_20220907160951\2022_PHP自作\RestaurantOrder\resources\views/restaurant/layout/layoutBefore.blade.php ENDPATH**/ ?>