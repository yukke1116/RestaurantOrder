@extends('restaurant.layout.layoutCustomer')
@section('content')
<div class="content" id="menuListContent">
    <div class="headerMenu">
        <h1>MENU</h1>
        <div class="orderHistory">
            <form action="orderHistory" method="post">
            @csrf
                {{-- restaurant_name --}}
                <label for="restaurant_name" class="none"></label>
                <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
                {{-- seating_number --}}
                <label for="seating_number" class="none"></label>
                <input type="text" name="seating_number" id="seating_number" value="@php echo $seating_number; @endphp" class="none">
                {{-- restaurant_id --}}
                <label for="restaurant_id" class="none"></label>
                <input type="text" name="restaurant_id" id="restaurant_id" value="@php echo $restaurant_id; @endphp" class="none">
                {{-- seating_id --}}
                @foreach ($seating_id as $row => $val2)
                <label for="seating_id" class="none"></label>
                <input type="text" name="seating_id" id="seating_id" value="{{ $val2 -> id }}" class="none">
                @endforeach
                <button>注文履歴を見る</button>
            </form>
        </div>
    </div>
    @foreach ($select as $row => $val)
    <div class="menu">
        <form action="orderComplete" method="post">
        @csrf
            {{-- restaurant_name --}}
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
            {{-- seating_number --}}
            <label for="seating_number" class="none"></label>
            <input type="text" name="seating_number" id="seating_number" value="@php echo $seating_number; @endphp" class="none">
            {{-- restaurant_id --}}
            <label for="restaurant_id" class="none"></label>
            <input type="text" name="restaurant_id" id="restaurant_id" value="@php echo $restaurant_id; @endphp" class="none">
            {{-- seating_id --}}
            @foreach ($seating_id as $row => $val2)
            <label for="seating_id" class="none"></label>
            <input type="text" name="seating_id" id="seating_id" value="{{ $val2 -> id }}" class="none">
            @endforeach
            {{-- menu_id --}}
            <label for="menu_id" class="none"></label>
            <input type="text" name="menu_id" id="menu_id" value="{{ $val -> id }}" class="none">
            {{-- menu_name --}}
            <label for="menu_name" class="none"></label>
            <input type="text" name="menu_name" id="menu_name" value="{{ $val -> menu_name }}" class="none">
            <div class="menuList">
                <img src="{{ asset($val->image) }}" alt="メニューイメージ">
                <div class="menuInfo">
                    <p class="menu_name">{{ $val -> menu_name }}</p>
                    <p class="price">{{ $val -> price }}円</p>
                    <div class="detail">
                        <p>{{ $val -> detail }}</p>
                    </div>
                </div>
                <div class="orderButton" onclick="return confirm('{{ $val -> menu_name }}を注文してよろしいですか？')">
                    <button>注文</button>
                </div>
            </div>
        </form>
    </div>
    @endforeach
</div>
@endsection