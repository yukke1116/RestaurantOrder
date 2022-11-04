
<?php $__env->startSection('content'); ?>
<div class="content" id="menuContent">
    <h1>メニュー管理</h1>
    <table border="1">
        <thead>
            <tr>
                <th>画像</th>
                <th>メニュー名</th>
                <th>価格</th>
                <th>説明</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($val -> image); ?></td>
                    <td><?php echo e($val -> menu_name); ?></td>
                    <td><?php echo e($val -> price); ?>円</td>
                    <td><?php echo e($val -> detail); ?></td>
                    <td>
                        <form action="editMenu" method="get">
                        <?php echo csrf_field(); ?>
                            <label for="restaurant_name" class="none"></label>
                            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
                            <label for="name_or_position" class="none"></label>
                            <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
                            <label for="id" class="none"></label>
                            <input type="text" name="id" id="id" value="<?php echo e($val -> id); ?>" class="none">
                            <button>編集</button>
                        </form>
                    </td>
                    <td>
                        <form action="deleteMenu" method="post">
                        <?php echo csrf_field(); ?>
                            <label for="restaurant_name" class="none"></label>
                            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
                            <label for="name_or_position" class="none"></label>
                            <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
                            <label for="id" class="none"></label>
                            <input type="text" name="id" id="id" value="<?php echo e($val -> id); ?>" class="none">
                            <button onclick="return confirm('<?php echo e($val -> menu_name); ?>を削除してよろしいですか？')">削除</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="buttonMenu">
        <div class="buttonContent">
            <form action="addMenu" method="get">
            <?php echo csrf_field(); ?>
                <label for="restaurant_name" class="none"></label>
                <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
                <label for="name_or_position" class="none"></label>
                <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
                <button>メニュー追加</button>
            </form>
        </div>
        <div class="buttonContent">
            <form action="managerTop" method="post">
            <?php echo csrf_field(); ?>
                <label for="restaurant_name" class="none"></label>
                <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
                <label for="name_or_position" class="none"></label>
                <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
                <button>TOPに戻る</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('restaurant.layout.layoutManager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/menu/menuManagement.blade.php ENDPATH**/ ?>