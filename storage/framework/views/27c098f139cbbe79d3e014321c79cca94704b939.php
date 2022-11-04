
<?php $__env->startSection('content'); ?>
<div class="content">
    <form action="signupComplete" method="post">
        <?php echo csrf_field(); ?>
        <h1>新規登録</h1>
        <div class="form">
            <label for="restaurantName">店舗名</label>
            <br>
            <input type="text" name="restaurantName" id="restaurantName" placeholder="店舗名">
        </div>
        <div class="form">
            <label for="password">パスワード</label>
            <br>
            <input type="text" name="password" id="password" placeholder="パスワード">
        </div>
        <div class="form">
            <label for="password2">パスワード（確認用）</label>
            <br>
            <input type="text" name="password2" id="password2" placeholder="パスワード（確認用）">
        </div>
        <div class="signupButton">
            <button type="submit">登録</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutBefore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2022_PHP自作_20220907160951\2022_PHP自作\RestaurantOrder\resources\views/restaurant/signup/signup.blade.php ENDPATH**/ ?>