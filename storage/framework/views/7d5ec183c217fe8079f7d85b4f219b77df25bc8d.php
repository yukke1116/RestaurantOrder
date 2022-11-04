
<?php $__env->startSection('content'); ?>
<div class="content">    
    <h1>注文票</h1>
    <form action="orderComplete" method="post">
    <?php echo csrf_field(); ?>
        <div class="buttonMenu">
            <div class="buttonContent">
                <button>注文を確定する</button>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>メニュー名</th>
                    <th>価格</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($val -> menu_name); ?></td>
                    <td><?php echo e($val -> price); ?>円</td>
                    <td>
    </form>
                        <form action="deleteOrder" method="post">
                        <?php echo csrf_field(); ?>
                            
                            <label for="restaurant_name" class="none"></label>
                            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
                            
                            <label for="seating_number" class="none"></label>
                            <input type="text" name="seating_number" id="seating_number" value="<?php echo $seating_number; ?>" class="none">
                            
                            <label for="restaurant_id" class="none"></label>
                            <input type="text" name="restaurant_id" id="restaurant_id" value="<?php echo $restaurant_id; ?>" class="none">
                            
                            <label for="seating_id" class="none"></label>
                            <input type="text" name="seating_id" id="seating_id" value="<?php echo e($val -> seating_id); ?>" class="none">
                            
                            <label for="id" class="none"></label>
                            <input type="text" name="id" id="id" value="<?php echo e($val -> id); ?>" class="none">
                            <button>削除</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="buttonMenu">
            <div class="buttonContent">
                <form action="menu" method="post">
                <?php echo csrf_field(); ?>
                    
                    <label for="restaurant_name" class="none"></label>
                    <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
                    
                    <label for="seating_number" class="none"></label>
                    <input type="text" name="seating_number" id="seating_number" value="<?php echo $seating_number; ?>" class="none">
                    
                    <label for="restaurant_id" class="none"></label>
                    <input type="text" name="restaurant_id" id="restaurant_id" value="<?php echo $restaurant_id; ?>" class="none">
                    <button>MENUに戻る</button>
                </form>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutCustomer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/customer/orderForm.blade.php ENDPATH**/ ?>