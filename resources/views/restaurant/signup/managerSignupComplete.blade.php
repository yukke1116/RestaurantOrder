@extends('restaurant.layout.layoutBefore')
@section('content')
<div class="content">
    <h1>登録完了</h1>
    <p>管理者{{ $name }}様</p>
    <p>ご確認ありがとうございます。</p>
    <div class="link">
        <a href="login" class="login">ログインはこちら</a>
    </div>
</div>
@endsection