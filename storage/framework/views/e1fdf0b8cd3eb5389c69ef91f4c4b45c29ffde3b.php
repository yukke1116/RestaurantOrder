
<?php $__env->startSection('content'); ?>
<div class="content" id="fileContent">
    <h1>メニュー編集</h1>
    <form action="editCompleteMenu" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <label for="id" class="none"></label>
        <input type="text" name="id" id="id" value="<?php echo e($val -> id); ?>" class="none">
        <div class="form">
            <p>画像</p>
            <label for="image"></label>
            <input type="file" name="image" id="image" value="<?php echo e($val -> image); ?>">
        </div>
        <div class="form">
            <p>メニュー名</p>
            <label for="menu_name"></label>
            <input type="text" name="menu_name" id="menu_name" value="<?php echo e($val -> menu_name); ?>">
        </div>
        <div class="form">
            <p>価格</p>
            <label for="price"></label>
            <input type="text" name="price" id="price" value="<?php echo e($val -> price); ?>">
        </div>
        <div class="form">
            <p>説明</p>
            <label for="detail"></label>
            <textarea name="detail" id="detail" cols="23" rows="10"><?php echo e($val -> detail); ?></textarea>
        </div>
        <div class="enterButton">
            <button onclick="return confirm('下記内容で編集してよろしいですか？')">編集</button>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </form>
    <div>
        <form action="menuManagement" method="post">
        <?php echo csrf_field(); ?>
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
            <label for="name_or_position" class="none"></label>
            <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
            <div class="enterButton">
                <button type="submit">戻る</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutManager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/menu/editMenu.blade.php ENDPATH**/ ?>