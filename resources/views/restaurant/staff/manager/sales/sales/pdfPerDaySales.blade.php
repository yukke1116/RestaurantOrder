<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>１日ごとの売上</title>
    <link rel="stylesheet" href="css/layout.css">
    <style type="text/css">
    @font-face {
        font-family: migmix;
        font-style: normal;
        font-weight: normal;
        src: url('{{ storage_path('fonts/migmix-2p-regular.ttf') }}') format('truetype');
    }
    @font-face {
        font-family: migmix;
        font-style: bold;
        font-weight: bold;
        src: url('{{ storage_path('fonts/migmix-2p-bold.ttf') }}') format('truetype');
    }
    body {
        font-family: migmix !important;
    }
    h1 {
        font-size: 50px;
        text-align: center;
    }
    table {
        margin: 0 auto;
        font-size: 20px;
        width: 100%;
    }
   </style>
</head>
<body>
    <h1>１日ごとの売上</h1>
    <table border="1">
        <thead>
            <tr>
                <th>日付</th>
                <th>売上</th>
            </tr>
        </thead>
        @foreach ($select as $row => $val)
        <tbody>
            <tr>
                <td>{{ $val -> time }}</td>
                <td>{{ $val -> sum }}円</td>
            </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>