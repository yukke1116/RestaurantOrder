
<?php $__env->startSection('content'); ?>
<div class="content" id="menuListContent">
    <div class="headerMenu">
        <h1>MENU</h1>
        <div class="orderHistory">
            <form action="orderHistory" method="post">
            <?php echo csrf_field(); ?>
                
                <label for="restaurant_name" class="none"></label>
                <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
                
                <label for="seating_number" class="none"></label>
                <input type="text" name="seating_number" id="seating_number" value="<?php echo $seating_number; ?>" class="none">
                
                <label for="restaurant_id" class="none"></label>
                <input type="text" name="restaurant_id" id="restaurant_id" value="<?php echo $restaurant_id; ?>" class="none">
                
                <?php $__currentLoopData = $seating_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <label for="seating_id" class="none"></label>
                <input type="text" name="seating_id" id="seating_id" value="<?php echo e($val2 -> id); ?>" class="none">
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <button>注文履歴を見る</button>
            </form>
        </div>
    </div>
    <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="menu">
        <form action="orderComplete" method="post">
        <?php echo csrf_field(); ?>
            
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
            
            <label for="seating_number" class="none"></label>
            <input type="text" name="seating_number" id="seating_number" value="<?php echo $seating_number; ?>" class="none">
            
            <label for="restaurant_id" class="none"></label>
            <input type="text" name="restaurant_id" id="restaurant_id" value="<?php echo $restaurant_id; ?>" class="none">
            
            <?php $__currentLoopData = $seating_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label for="seating_id" class="none"></label>
            <input type="text" name="seating_id" id="seating_id" value="<?php echo e($val2 -> id); ?>" class="none">
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <label for="menu_id" class="none"></label>
            <input type="text" name="menu_id" id="menu_id" value="<?php echo e($val -> id); ?>" class="none">
            
            <label for="menu_name" class="none"></label>
            <input type="text" name="menu_name" id="menu_name" value="<?php echo e($val -> menu_name); ?>" class="none">
            <div class="menuList">
                <img src="<?php echo e(asset($val->image)); ?>" alt="メニューイメージ">
                <div class="menuInfo">
                    <p class="menu_name"><?php echo e($val -> menu_name); ?></p>
                    <p class="price"><?php echo e($val -> price); ?>円</p>
                    <div class="detail">
                        <p><?php echo e($val -> detail); ?></p>
                    </div>
                </div>
                <div class="orderButton" onclick="return confirm('<?php echo e($val -> menu_name); ?>を注文してよろしいですか？')">
                    <button>注文</button>
                </div>
            </div>
        </form>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutCustomer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/customer/menu.blade.php ENDPATH**/ ?>