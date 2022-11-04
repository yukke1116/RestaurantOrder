
<?php $__env->startSection('content'); ?>
<div class="content">
    <form action="" method="post">
        <?php echo csrf_field(); ?>
        <h1>登録完了</h1>
        <p>ご確認ありがとうございます。</p>
        <div class="link">
            <a href="login" class="login">ログインはこちら</a>
            <a href="managerSignup" class="managerSignup">管理者の方はこちら</a>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutBefore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\2022_PHP自作_20220907160951\2022_PHP自作\RestaurantOrder\resources\views/restaurant/signup/signupComplete.blade.php ENDPATH**/ ?>