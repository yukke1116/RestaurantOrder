@extends('restaurant.layout.layoutStaff')
@section('content')
<div class="content">
    <form action="hallSeatOrderHistory" method="post">
        @csrf
        <h1>席番号入力</h1>
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="form">
            <label for="seating_number"></label>
            <input type="text" name="seating_number" id="seating_number" placeholder="席番号">
        </div>
        <div class="enterButton">
            <button>入力</button>
        </div>
    </form>
    <form action="hallTop" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <div class="buttonMenu">
            <button>TOPに戻る</button>
        </div>
    </form>
</div>
@endsection