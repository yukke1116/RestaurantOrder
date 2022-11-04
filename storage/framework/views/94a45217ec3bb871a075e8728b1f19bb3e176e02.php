
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>注文履歴</h1>
    <table border="1">
        <thead>
            <tr>
                <th>メニュー名</th>
                <th>注文数</th>
                <th>価格</th>
                <th>合計金額</th>
            </tr>
        </thead>
        <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr>
                <td><?php echo e($val -> menu_name); ?></td>
                <td><?php echo e($val -> quantity); ?>点</td>
                <td><?php echo e($val -> price); ?>円</td>
                <td><?php echo e($val -> sum); ?>円</td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php $__currentLoopData = $sum; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tfoot>
            <tr>
                <td colspan="3"></td>
                <td><?php echo e($val -> sum); ?>円</td>
            </tr>
        </tfoot>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <form action="menu" method="post">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="seating_number" class="none"></label>
        <input type="text" name="seating_number" id="seating_number" value="<?php echo $seating_number; ?>" class="none">
        <label for="restaurant_id" class="none"></label>
        <input type="text" name="restaurant_id" id="restaurant_id" value="<?php echo $restaurant_id; ?>" class="none">
        <div class="enterMenu">
            <button type="submit">メニュー画面へ</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutCustomer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/customer/orderHistory.blade.php ENDPATH**/ ?>