@extends('restaurant.layout.layout')
@section('content')
<div class="validate">
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
<div class="staffLoginContents">
    <div class="content">
        <form action="hallTop" method="post">
            @csrf
            <h1>ホール</h1>
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
            <div class="form">
                <label for="name_or_position" class="none"></label>
                <input type="text" name="name_or_position" id="name_or_position" value="ホール" class="none">
            </div>
            <div class="form">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="パスワード">
            </div>
            <div class="loginButton">
                <button type="submit">ログイン</button>
            </div>
        </form>
    </div>
    <div class="content">
        <form action="kitchenTop" method="post">
            @csrf
            <h1>キッチン</h1>
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
            <div class="form">
                <label for="name_or_position" class="none"></label>
                <input type="text" name="name_or_position" id="name_or_position" value="キッチン" class="none">
            </div>
            <div class="form">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="パスワード">
            </div>
            <div class="loginButton">
                <button type="submit">ログイン</button>
            </div>
        </form>
    </div>
    <div class="content">
        <form action="managerTop" method="post">
            @csrf
            <h1>管理者</h1>
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
            <div class="form">
                <label for="name_or_position"></label>
                <input type="text" name="name_or_position" id="name_or_position" placeholder="氏名">
            </div>
            <div class="form">
                <label for="password"></label>
                <input type="password" name="password" id="password" placeholder="パスワード">
            </div>
            <div class="loginButton">
                <button type="submit">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection