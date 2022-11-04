@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content">
    <h1>１か月ごとの売上</h1>
    <table border="1">
        <thead>
            <tr>
                <th>月</th>
                <th>売上</th>
            </tr>
        </thead>
        @foreach ($select as $row => $val)
        <tbody>
            <tr>
                <td>{{ $val -> time }}</td>
                <td>{{ $val -> sum }}円</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <form action="pdfPerMonthSales/pdf" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <label for="year" class="none"></label>
        <input type="text" name="year" id="year" value="@php echo $year; @endphp" class="none">
        <div class="buttonMenu">
            <button>出力</button>
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