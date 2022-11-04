
<?php $__env->startSection('content'); ?>
<div class="validate">
    <?php if($errors->any()): ?>
        <div class="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
</div>
<div class="staffLoginContents">
    <div class="content">
        <form action="hallTop" method="post">
            <?php echo csrf_field(); ?>
            <h1>ホール</h1>
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
            <div class="form">
                <label for="name_or_position" class="none"></label>
                <input type="text" name="name_or_position" id="name_or_position" value="ホール" class="none">
            </div>
            <div class="form">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="パスワード">
            </div>
            <div class="loginButton">
                <button type="submit">ログイン</button>
            </div>
        </form>
    </div>
    <div class="content">
        <form action="kitchenTop" method="post">
            <?php echo csrf_field(); ?>
            <h1>キッチン</h1>
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
            <div class="form">
                <label for="name_or_position" class="none"></label>
                <input type="text" name="name_or_position" id="name_or_position" value="キッチン" class="none">
            </div>
            <div class="form">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="パスワード">
            </div>
            <div class="loginButton">
                <button type="submit">ログイン</button>
            </div>
        </form>
    </div>
    <div class="content">
        <form action="managerTop" method="post">
            <?php echo csrf_field(); ?>
            <h1>管理者</h1>
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
            <div class="form">
                <label for="name_or_position"></label>
                <input type="text" name="name_or_position" id="name_or_position" placeholder="氏名">
            </div>
            <div class="form">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="パスワード">
            </div>
            <div class="loginButton">
                <button type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/staffLogin.blade.php ENDPATH**/ ?>