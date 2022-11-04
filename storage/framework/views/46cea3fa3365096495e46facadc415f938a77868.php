
<?php $__env->startSection('content'); ?>
<div class="content">
    <form action="kitchenSeatOrderHistory" method="post">
        <?php echo csrf_field(); ?>
        <h1>席番号入力</h1>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="form">
            <label for="seating_number"></label>
            <input type="text" name="seating_number" id="seating_number" placeholder="席番号">
        </div>
        <div class="enterButton">
            <button>入力</button>
        </div>
    </form>
    <form action="kitchenTop" method="post">
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
<?php echo $__env->make('restaurant.layout.layoutStaff', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/kitchen/kitchenSeating.blade.php ENDPATH**/ ?>