@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content">
    <h1>売れ数</h1>
    <form action="selectMonthSalesFigures" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="topMenu">
            <button>１日ごとの売れ数</button>
        </div>
    </form>
    <form action="selectYearSalesFigures" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="topMenu">
            <button>１か月ごとの売れ数</button>
        </div>
    </form>
    <div class="buttonMenu">
        <form action="salesManagement" method="post">
        @csrf
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
            <label for="name_or_position" class="none"></label>
            <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
            <button>戻る</button>
        </form>
    </div>
</div>
@endsection