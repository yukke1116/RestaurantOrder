
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>TOP</h1>
    <form action="seating" method="get">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <div class="topMenu">
            <button class="seating">
                お客様はこちら
            </button>
        </div>
    </form>
    <form action="staffLogin" method="get">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <div class="topMenu">
            <button class="staffLogin">
                従業員の方はこちら
            </button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/top.blade.php ENDPATH**/ ?>