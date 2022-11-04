
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>売上年選択</h1>
    <form action="perMonthSales" method="post">
    <?php echo csrf_field(); ?>
        <div class="select">
            <select name="year" id="year">
                <option value="year" selected>年を選択して下さい</option>
                <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($val -> year); ?>" id="year" name="year">
                    <?php echo e($val -> year); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="buttonMenu">
            <button>選択</button>
        </div>
    </form>
    <form action="sales" method="post">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="buttonMenu">
            <button>戻る</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutManager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/sales/sales/selectYearSales.blade.php ENDPATH**/ ?>