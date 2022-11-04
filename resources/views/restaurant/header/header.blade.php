<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>header</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <div class="header">
        <div class="headerLogo">
            <p>{{ $restaurant_name }}</p>
        </div>
        <div class="logout">
            <a href="logout" onclick="return confirm('ログアウトしてよろしいですか？')">ログアウト</a>
        </div>
    </div>
</body>
</html>