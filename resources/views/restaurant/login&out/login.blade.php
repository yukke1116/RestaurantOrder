@extends('restaurant.layout.layoutBefore')
@section('content')
<div class="content">
    <form action="top" method="post">
        @csrf
        <h1>ログイン</h1>
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form">
            <label for="restaurant_name"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" placeholder="店舗名">
        </div>
        <div class="form">
            <label for="password"></label>
            <input type="password" name="password" id="password" placeholder="パスワード">
        </div>
        <div class="loginButton">
            <button type="submit" id="login">ログイン</button>
        </div>
    </form>
    <div>
        <a href="signup" class="siginup">新規登録はこちら</a>
    </div>
</div>
@endsection