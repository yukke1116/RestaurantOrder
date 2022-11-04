@extends('restaurant.layout.layout')
@section('content')
<div class="content">
    <h1>メニューへのご案内</h1>
    <form action="menu" method="post">
    @csrf
        <p>お客様の席は{{ $seating_number }}席です。</p>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="seating_number" class="none"></label>
        <input type="text" name="seating_number" id="seating_number" value="@php echo $seating_number; @endphp" class="none">
        <label for="restaurant_id" class="none"></label>
        <input type="text" name="restaurant_id" id="restaurant_id" value="@php echo $restaurant_id; @endphp" class="none">
        <div class="enterMenu">
            <button type="submit">メニュー画面へ</button>
        </div>
    </form>
</div>
@endsection