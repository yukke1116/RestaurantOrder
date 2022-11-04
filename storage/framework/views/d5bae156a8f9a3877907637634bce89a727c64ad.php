
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>TOP</h1>
    <form action="kitchenOrderStatus" method="post">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="topMenu">
            <button>只今の注文状況</button>
        </div>
    </form>
    <form action="kitchenTodayOrderHistory" method="post">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="topMenu">
            <button>本日の注文履歴</button>
        </div>
    </form>
    <form action="kitchenSeating" method="post">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="topMenu">
            <button>各客席の注文履歴</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutStaff', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/kitchen/kitchenTop.blade.php ENDPATH**/ ?>