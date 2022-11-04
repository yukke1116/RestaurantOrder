
<?php $__env->startSection('content'); ?>
<div class="content">
    <form action="top" method="post">
        <?php echo csrf_field(); ?>
        <h1>ログイン</h1>
        <?php if($errors->any()): ?>
            <div class="alert">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="form">
            <label for="restaurant_name"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" placeholder="店舗名">
        </div>
        <div class="form">
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="パスワード">
        </div>
        <div class="loginButton">
            <button type="submit" id="login">ログイン</button>
        </div>
    </form>
    <div>
        <a href="signup" class="siginup">新規登録はこちら</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutBefore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/login&out/login.blade.php ENDPATH**/ ?>