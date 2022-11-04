@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content">
    <h1>ユーザ編集</h1>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="editCompleteUser" method="post">
    @csrf
    @foreach ($select as $row => $val )
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="form">
            <p>氏名またはポジション</p>
            <label for="staff_name_or_position" class="none"></label>
            <input type="text" name="staff_name_or_position" id="staff_name_or_position" value="{{ $val -> name_or_position }}">
        </div>
        <div class="form">
            <p>パスワード</p>
            <label for="password"></label>
            <input type="text" name="password" id="password" value="{{ $val -> password }}">
        </div>
        <div class="enterButton">
            <button onclick="return confirm('下記内容で編集してよろしいですか？')">編集</button>
        </div>
    @endforeach
    </form>
    <div>
        <form action="userManagement" method="post">
        @csrf
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
            <label for="name_or_position" class="none"></label>
            <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
            <div class="enterButton">
                <button type="submit">戻る</button>
            </div>
        </form>
    </div>
</div>
@endsection