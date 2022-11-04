@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content">
    <h1>売上管理</h1>
    <form action="sales" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="topMenu">
            <button>売上</button>
        </div>
    </form>
    <form action="salesFigures" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="topMenu">
            <button>売れ数</button>
        </div>
    </form>
    <div class="buttonMenu">
        <form action="managerTop" method="post">
        @csrf
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
            <label for="name_or_position" class="none"></label>
            <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
            <button>TOPに戻る</button>
        </form>
    </div>
</div>
@endsection