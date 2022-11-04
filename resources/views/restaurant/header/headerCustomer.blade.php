<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>header</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <div class="header">
        <p class="headerLogo">{{ $restaurant_name }}</p>
        <p class="seatingNumber">{{ $seating_number }}席</p>
        <div class="logout">
            <a href="logout" onclick="return confirm('ログアウトしてよろしいですか？')">ログアウト</a>
        </div>
    </div>
</body>
</html>