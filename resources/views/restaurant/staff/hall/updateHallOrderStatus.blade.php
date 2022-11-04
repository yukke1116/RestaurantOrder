@extends('restaurant.layout.layoutStaff')
@section('content')
<div class="content">
    <h1>更新完了</h1>
    <form action="hallOrderStatus" method="post">
    @csrf
        <p>注文状況の更新を行いました。</p>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="buttonMenu">
            <button type="submit">注文状況画面へ</button>
        </div>
    </form>
</div>
@endsection