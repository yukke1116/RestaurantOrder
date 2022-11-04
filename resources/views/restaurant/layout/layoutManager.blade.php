<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Restaurant Order</title>
    <link rel="stylesheet" href="css/layout.css">
</head>
<body>
    <header>
        @include('restaurant.header.headerManager')
    </header>
    @yield('content')
    <footer>
        @include('restaurant.footer.footer')
    </footer>
</body>
</html>