
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>メニューへのご案内</h1>
    <form action="menu" method="post">
    <?php echo csrf_field(); ?>
        <p>お客様の席は<?php echo e($seating_number); ?>席です。</p>
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
<?php echo $__env->make('restaurant.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/customer/seatingComplete.blade.php ENDPATH**/ ?>