@extends('restaurant.layout.layoutStaff')
@section('content')
<div class="content">
    <h1>TOP</h1>
    <form action="kitchenOrderStatus" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="topMenu">
            <button>只今の注文状況</button>
        </div>
    </form>
    <form action="kitchenTodayOrderHistory" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="topMenu">
            <button>本日の注文履歴</button>
        </div>
    </form>
    <form action="kitchenSeating" method="get">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="topMenu">
            <button>各客席の注文履歴</button>
        </div>
    </form>
</div>
@endsection