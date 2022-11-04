
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>ユーザ削除完了</h1>
    <form action="userManagement" method="post">
    <?php echo csrf_field(); ?>
        <p>ユーザの削除が完了しました。</p>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="enterButton">
            <button type="submit">戻る</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutManager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/user/deleteUser.blade.php ENDPATH**/ ?>