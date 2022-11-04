@extends('restaurant.layout.layoutBefore')
@section('content')
<div class="content">
    <form action="managerSignupComplete" method="post">
        @csrf
        <h1>管理者登録</h1>
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
            <label for="restaurant_name">店舗名</label>
            <br>
            <input type="text" name="restaurant_name" id="restaurant_name" placeholder="店舗名">
        </div>
        <div class="form">
            <label for="name">氏名</label>
            <br>
            <input type="text" name="name" id="name" placeholder="氏名">
        </div>
        <div class="form">
            <label for="password">パスワード</label>
            <br>
            <input type="password" name="password" id="password" placeholder="パスワード">
        </div>
        <div class="form">
            <label for="password_confirmation">パスワード（確認用）</label>
            <br>
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="パスワード（確認用）">
        </div>
        <div class="signupButton" onclick="return confirm('下記内容で登録してよろしいですか？')">
            <button type="submit">登録</button>
        </div>
    </form>
</div>
@endsection