@extends('restaurant.layout.layoutManager')
@section('content')
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
            @foreach ($select as $row => $val)
                <tr>
                    <td>{{ $val -> restaurant_name }}</td>
                    <td>{{ $val -> name_or_position }}</td>
                    <td>{{ $val -> password }}</td>
                    <td>
                        <form action="editUser" method="get">
                        @csrf
                            <label for="restaurant_name" class="none"></label>
                            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
                            <label for="name_or_position" class="none"></label>
                            <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
                            <label for="staff_name_or_position" class="none"></label>
                            <input type="text" name="staff_name_or_position" id="staff_name_or_position" value="{{ $val -> name_or_position }}" class="none">
                            <button>編集</button>
                        </form>
                    </td>
                    <td>
                        <form action="deleteUser" method="post">
                        @csrf
                            <label for="restaurant_name" class="none"></label>
                            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
                            <label for="name_or_position" class="none"></label>
                            <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
                            <label for="staff_name_or_position" class="none"></label>
                            <input type="text" name="staff_name_or_position" id="staff_name_or_position" value="{{ $val -> name_or_position }}" class="none">
                            <button onclick="return confirm('{{ $val -> name_or_position }}を削除してよろしいですか？')">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="buttonMenu">
        <div class="buttonContent">
            <form action="addUser" method="get">
            @csrf
                <label for="restaurant_name" class="none"></label>
                <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
                <label for="name_or_position" class="none"></label>
                <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
                <button>ユーザ追加</button>
            </form>
        </div>
        <div class="buttonContent">
            <form action="managerTop" method="post">
            @csrf
                <label for="restaurant_name" class="none"></label>
                <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
                <label for="name_or_position" class="none"></label>
                <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
                <button>TOPに戻る</button>
            </form>
        </div>
    </div>
</div>
@endsection