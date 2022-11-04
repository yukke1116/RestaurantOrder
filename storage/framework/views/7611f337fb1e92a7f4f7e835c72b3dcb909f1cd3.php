
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>１日ごとの売れ数</h1>
    <table border="1">
        <thead>
            <tr>
                <th>日付</th>
                <th>売れ数</th>
            </tr>
        </thead>
        <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr>
                <td><?php echo e($val -> time); ?></td>
                <td><?php echo e($val -> quantity); ?>点</td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <form action="pdfPerDaySalesFigures/pdf" method="post">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <label for="month" class="none"></label>
        <input type="text" name="month" id="month" value="<?php echo $month; ?>" class="none">
        <div class="buttonMenu">
            <button>出力</button>
        </div>
    </form>
    <form action="salesFigures" method="post">
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
<?php echo $__env->make('restaurant.layout.layoutManager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/sales/salesFigures/perDaySalesFigures.blade.php ENDPATH**/ ?>