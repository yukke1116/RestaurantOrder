@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content">
    <h1>ユーザ追加完了</h1>
    <form action="userManagement" method="post">
    @csrf
        <p>ユーザの追加が完了しました。</p>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="enterButton">
            <button type="submit">戻る</button>
        </div>
    </form>
</div>
@endsection