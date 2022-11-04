@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content" id="menuContent">
    <h1>メニュー管理</h1>
    <table border="1">
        <thead>
            <tr>
                <th>画像</th>
                <th>メニュー名</th>
                <th>価格</th>
                <th>説明</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($select as $row => $val)
                <tr>
                    <td>{{ $val -> image }}</td>
                    <td>{{ $val -> menu_name }}</td>
                    <td>{{ $val -> price }}円</td>
                    <td>{{ $val -> detail }}</td>
                    <td>
                        <form action="editMenu" method="get">
                        @csrf
                            <label for="restaurant_name" class="none"></label>
                            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
                            <label for="name_or_position" class="none"></label>
                            <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
                            <label for="id" class="none"></label>
                            <input type="text" name="id" id="id" value="{{ $val -> id }}" class="none">
                            <button>編集</button>
                        </form>
                    </td>
                    <td>
                        <form action="deleteMenu" method="post">
                        @csrf
                            <label for="restaurant_name" class="none"></label>
                            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
                            <label for="name_or_position" class="none"></label>
                            <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
                            <label for="id" class="none"></label>
                            <input type="text" name="id" id="id" value="{{ $val -> id }}" class="none">
                            <button onclick="return confirm('{{ $val -> menu_name }}を削除してよろしいですか？')">削除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="buttonMenu">
        <div class="buttonContent">
            <form action="addMenu" method="get">
            @csrf
                <label for="restaurant_name" class="none"></label>
                <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
                <label for="name_or_position" class="none"></label>
                <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
                <button>メニュー追加</button>
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