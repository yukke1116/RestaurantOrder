<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>header</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <div class="header">
        <p class="headerLogo"><?php echo e($restaurant_name); ?> </p>
        <div class="managerName">
            <p>管理者 <?php echo e($name_or_position); ?> 様</p>
        </div>
        <div class="logout">
            <a href="logout" onclick="return confirm('ログアウトしてよろしいですか？')">ログアウト</a>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\RestaurantOrder\resources\views/restaurant/header/headerManager.blade.php ENDPATH**/ ?>