
<?php $__env->startSection('content'); ?>
<div class="content" id="fileContent">
    <h1>メニュー追加</h1>
    <?php if($errors->any()): ?>
        <div class="alert">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="addCompleteMenu" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
        <div class="form">
            <p>画像</p>
            <label for="image"></label>
            <input type="file" name="image" id="image" placeholder="画像ファイルを添付">
        </div>
        <div class="form">
            <p>メニュー名</p>
            <label for="menu_name"></label>
            <input type="text" name="menu_name" id="menu_name" placeholder="メニュー名">
        </div>
        <div class="form">
            <p>価格</p>
            <label for="price"></label>
            <input type="text" name="price" id="price" placeholder="価格">
        </div>
        <div class="form">
            <p>説明</p>
            <label for="detail"></label>
            <textarea type="text" name="detail" id="detail" placeholder="説明" cols="23" rows="10"></textarea>
        </div>
        <div class="enterButton">
            <button onclick="return confirm('下記内容で追加してよろしいですか？')">追加</button>
        </div>
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
<?php echo $__env->make('restaurant.layout.layoutManager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/menu/addMenu.blade.php ENDPATH**/ ?>