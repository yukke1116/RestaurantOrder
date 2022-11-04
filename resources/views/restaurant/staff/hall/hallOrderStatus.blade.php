@extends('restaurant.layout.layoutStaff')
@section('content')
<div class="content" id="userContent">
    <h1>只今の注文状況</h1>
    <table border="1">
        <thead>
            <tr>
                <th>メニュー名</th>
                <th>注文時間</th>
                <th>席番号</th>
                <th>調理状況</th>
                <th>提供状況</th>
            </tr>
        </thead>
        @foreach ($select as $row => $val)
        <tbody>
            <tr>
                <td>{{ $val -> menu_name }}</td>
                <td>{{ $val -> created_at }}</td>
                <td>{{ $val -> seating_number }}席</td>
                <td>{{ $val -> prepared }}</td>
                <td>
                    <form action="updateHallOrderStatus" method="post">
                    @csrf
                        <label for="restaurant_name" class="none"></label>
                        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
                        <label for="name_or_position" class="none"></label>
                        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
                        <label for="id" class="none"></label>
                        <input type="text" name="id" id="id" value="{{ $val -> id }}" class="none">
                        <button onclick="return confirm('{{ $val -> menu_name }}\r\n{{ $val -> created_at }}\r\n{{ $val -> seating_number }}席\r\nを提供済にしますか？')">提供済</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <form action="hallTop" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="buttonMenu">
            <button>TOPに戻る</button>
        </div>
    </form>
</div>
@endsection