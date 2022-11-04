
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>ユーザ編集</h1>
    <form action="editCompleteUser" method="post">
    <?php echo csrf_field(); ?>
    <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="form">
            <p>氏名またはポジション</p>
            <label for="staff_name_or_position" class="none"></label>
            <input type="text" name="staff_name_or_position" id="staff_name_or_position" value="<?php echo e($val -> name_or_position); ?>">
        </div>
        <div class="form">
            <p>パスワード</p>
            <label for="password"></label>
            <input type="text" name="password" id="password" value="<?php echo e($val -> password); ?>">
        </div>
        <div class="enterButton">
            <button onclick="return confirm('下記内容で編集してよろしいですか？')">編集</button>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </form>
    <div>
        <form action="userManagement" method="post">
        <?php echo csrf_field(); ?>
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
            <label for="name_or_position" class="none"></label>
            <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
            <div class="enterButton">
                <button type="submit">戻る</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutManager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/user/editUser.blade.php ENDPATH**/ ?>