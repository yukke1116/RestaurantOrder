@extends('restaurant.layout.layout')
@section('content')
<div class="content">
    <h1>TOP</h1>
    <form action="seating" method="get">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <div class="topMenu">
            <button class="seating">
                お客様はこちら
            </button>
        </div>
    </form>
    <form action="staffLogin" method="get">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <div class="topMenu">
            <button class="staffLogin">
                従業員の方はこちら
            </button>
        </div>
    </form>
</div>
@endsection