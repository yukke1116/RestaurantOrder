@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content">
    <h1>売上月選択</h1>
    <form action="perDaySales" method="post">
    @csrf
        <div class="select">
            <select name="month" id="month">
                <option value="month" selected>月を選択して下さい</option>
                @foreach ($select as $row => $val)
                <option value="{{ $val -> month }}" id="month" name="month">
                    {{ $val -> month }}
                </option>
                @endforeach
            </select>
        </div>
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="buttonMenu">
            <button>選択</button>
        </div>
    </form>
    <form action="sales" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="buttonMenu">
            <button>戻る</button>
        </div>
    </form>
</div>
@endsection