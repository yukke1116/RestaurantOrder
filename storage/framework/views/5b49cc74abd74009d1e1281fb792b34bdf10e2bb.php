
<?php $__env->startSection('content'); ?>
<div class="content" id="userContent">
    <h1>ユーザ管理</h1>
    <table border="1">
        <thead>
            <tr>
                <th>店舗名</th>
                <th>氏名またはポジション</th>
                <th>パスワード</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $select; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($val -> restaurant_name); ?></td>
                    <td><?php echo e($val -> name_or_position); ?></td>
                    <td><?php echo e($val -> password); ?></td>
                    <td>
                        <form action="editUser" method="get">
                        <?php echo csrf_field(); ?>
                            <label for="restaurant_name" class="none"></label>
                            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
                            <label for="name_or_position" class="none"></label>
                            <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
                            <label for="staff_name_or_position" class="none"></label>
                            <input type="text" name="staff_name_or_position" id="staff_name_or_position" value="<?php echo e($val -> name_or_position); ?>" class="none">
                            <button>編集</button>
                        </form>
                    </td>
                    <td>
                        <form action="deleteUser" method="post">
                        <?php echo csrf_field(); ?>
                            <label for="restaurant_name" class="none"></label>
                            <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
                            <label for="name_or_position" class="none"></label>
                            <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
                            <label for="staff_name_or_position" class="none"></label>
                            <input type="text" name="staff_name_or_position" id="staff_name_or_position" value="<?php echo e($val -> name_or_position); ?>" class="none">
                            <button onclick="return confirm('<?php echo e($val -> name_or_position); ?>を削除してよろしいですか？')">削除</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="buttonMenu">
        <div class="buttonContent">
            <form action="addUser" method="get">
            <?php echo csrf_field(); ?>
                <label for="restaurant_name" class="none"></label>
                <input type="text" name="restaurant_name" id="restaurant_name" value="<?php echo $restaurant_name; ?>" class="none">
                <label for="name_or_position" class="none"></label>
                <input type="text" name="name_or_position" id="name_or_position" value="<?php echo $name_or_position; ?>" class="none">
                <button>ユーザ追加</button>
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
<?php echo $__env->make('restaurant.layout.layoutManager', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/staff/manager/user/userManagement.blade.php ENDPATH**/ ?>