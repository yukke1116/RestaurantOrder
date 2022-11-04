@extends('restaurant.layout.layout')
@section('content')
<div class="content">
    <form action="seatingComplete" method="post">
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
        @foreach ($select as $row => $val)
        <label for="restaurant_id" class="none"></label>
        <input type="text" name="restaurant_id" id="restaurant_id" value="{{ $val -> id }}" class="none">
        @endforeach
        <div class="form">
            <label for="seating_number"></label>
            <input type="text" name="seating_number" id="seating_number" placeholder="席番号">
        </div>
        <div class="enterButton">
            <button>入力</button>
        </div>
    </form>
    <form action="top" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <div class="enterButton">
            <button>戻る</button>
        </div>
    </form>
</div>
@endsection