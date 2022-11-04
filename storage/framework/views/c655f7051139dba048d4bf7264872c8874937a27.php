
<?php $__env->startSection('content'); ?>
<div class="content">
    <form action="seating" method="post">
        <?php echo csrf_field(); ?>
        <h1>ログイン</h1>
        <div class="form">
            <label for="restaurantName"></label>
            <input type="text" name="restaurantName" id="restaurantName" placeholder="店舗名">
        </div>
        <div class="form">
            <label for="password"></label>
            <input type="text" name="password" id="password" placeholder="パスワード">
        </div>
        <div class="loginButton">
            <button type="submit">ログイン</button>
        </div>
    </form>
    <div>
        <a href="signup" class="siginup">新規登録はこちら</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutBefore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2022_PHP自作_20220907160951\2022_PHP自作\RestaurantOrder\resources\views/restaurant/login&out/login.blade.php ENDPATH**/ ?>