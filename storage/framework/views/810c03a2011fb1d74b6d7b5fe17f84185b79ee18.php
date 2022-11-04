
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>売上</h1>
    <form action="selectMonthSales" method="post">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="topMenu">
            <button>１日ごとの売上</button>
        </div>
    </form>
    <form action="selectYearSales" method="post">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="topMenu">
            <button>１か月ごとの売上</button>
        </div>
    </form>
    <div class="buttonMenu">
        <form action="salesManagement" method="post">
        <?php echo csrf_field(); ?>
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
            <label for="name_or_position" class="none"></label>
            <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
            <button>戻る</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutManager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/sales/sales/sales.blade.php ENDPATH**/ ?>