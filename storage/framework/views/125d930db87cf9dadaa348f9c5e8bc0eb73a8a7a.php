
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>更新完了</h1>
    <form action="hallOrderStatus" method="post">
    <?php echo csrf_field(); ?>
        <p>注文状況の更新を行いました。</p>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="buttonMenu">
            <button type="submit">注文状況画面へ</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutStaff', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/hall/updateHallOrderStatus.blade.php ENDPATH**/ ?>