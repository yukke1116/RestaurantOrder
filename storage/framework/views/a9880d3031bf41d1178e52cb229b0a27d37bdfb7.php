
<?php $__env->startSection('content'); ?>
<div class="content" id="userContent">
    <h1>本日の注文履歴</h1>
    <table border="1">
        <thead>
            <tr>
                <th>メニュー名</th>
                <th>注文時間</th>
                <th>席番号</th>
                <th>調理状況</th>
                <th>提供状況</th>
            </tr>
        </thead>
        <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr>
                <td><?php echo e($val -> menu_name); ?></td>
                <td><?php echo e($val -> created_at); ?></td>
                <td><?php echo e($val -> seating_number); ?>席</td>
                <td><?php echo e($val -> prepared); ?></td>
                <td><?php echo e($val -> provided); ?></td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <form action="managerTop" method="post">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="buttonMenu">
            <button>TOPに戻る</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutManager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/managerTodayOrderHistory.blade.php ENDPATH**/ ?>