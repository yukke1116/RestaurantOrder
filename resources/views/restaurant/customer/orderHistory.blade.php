@extends('restaurant.layout.layoutCustomer')
@section('content')
<div class="content">
    <h1>注文履歴</h1>
    <table border="1">
        <thead>
            <tr>
                <th>メニュー名</th>
                <th>注文数</th>
                <th>価格</th>
                <th>合計金額</th>
            </tr>
        </thead>
        @foreach ($select as $row => $val)
        <tbody>
            <tr>
                <td>{{ $val -> menu_name }}</td>
                <td>{{ $val -> quantity }}点</td>
                <td>{{ $val -> price }}円</td>
                <td>{{ $val -> sum }}円</td>
            </tr>
        </tbody>
        @endforeach
        @foreach ($sum as $row => $val)
        <tfoot>
            <tr>
                <td colspan="3"></td>
                <td>{{ $val -> sum }}円</td>
            </tr>
        </tfoot>
        @endforeach
    </table>
    <form action="menu" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="seating_number" class="none"></label>
        <input type="text" name="seating_number" id="seating_number" value="@php echo $seating_number; @endphp" class="none">
        <label for="restaurant_id" class="none"></label>
        <input type="text" name="restaurant_id" id="restaurant_id" value="@php echo $restaurant_id; @endphp" class="none">
        <div class="enterMenu">
            <button type="submit">メニュー画面へ</button>
        </div>
    </form>
</div>
@endsection