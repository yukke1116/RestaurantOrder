@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content" id="userContent">
    <h1>本日の注文履歴</h1>
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
                <td>{{ $val -> provided }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <form action="managerTop" method="post">
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