
<?php $__env->startSection('content'); ?>
<div class="content">
    <form action="managerSignupComplete" method="post">
        <?php echo csrf_field(); ?>
        <h1>管理者登録</h1>
        <div class="form">
            <label for="restaurant_name">店舗名</label>
            <br>
            <input type="text" name="restaurant_name" id="restaurant_name" placeholder="店舗名">
        </div>
        <div class="form">
            <label for="name">氏名</label>
            <br>
            <input type="text" name="name" id="name" placeholder="氏名">
        </div>
        <div class="form">
            <label for="password">パスワード</label>
            <br>
            <input type="password" name="password" id="password" placeholder="パスワード">
        </div>
        <div class="form">
            <label for="password_confirmation">パスワード（確認用）</label>
            <br>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="パスワード（確認用）">
        </div>
        <div class="signupButton" onclick="return confirm('下記内容で登録してよろしいですか？')">
            <button type="submit">登録</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutBefore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/signup/managerSignup.blade.php ENDPATH**/ ?>