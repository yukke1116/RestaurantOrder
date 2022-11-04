@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content">
    <h1>売上年選択</h1>
    <form action="perMonthSales" method="post">
    @csrf
        <div class="select">
            <select name="year" id="year">
                <option value="year" selected>年を選択して下さい</option>
                @foreach ($select as $row => $val)
                <option value="{{ $val -> year }}" id="year" name="year">
                    {{ $val -> year }}
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