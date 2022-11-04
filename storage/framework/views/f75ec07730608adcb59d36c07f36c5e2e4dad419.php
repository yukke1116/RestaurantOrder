
<?php $__env->startSection('content'); ?>
<div class="content">
    <form action="signupComplete" method="post">
        <?php echo csrf_field(); ?>
        <h1>新規登録</h1>
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
            <label for="restaurant_name">店舗名</label>
            <br>
            <input type="text" name="restaurant_name" id="restaurant_name" placeholder="店舗名">
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
    <form action="login">
        <div class="signupButton">
            <button>戻る</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutBefore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/signup/signup.blade.php ENDPATH**/ ?>