
<?php $__env->startSection('content'); ?>
<div class="content">
    <h1>登録完了</h1>
    <p>管理者<?php echo e($name); ?>様</p>
    <p>ご確認ありがとうございます。</p>
    <div class="link">
        <a href="login" class="login">ログインはこちら</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutBefore', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/signup/managerSignupComplete.blade.php ENDPATH**/ ?>