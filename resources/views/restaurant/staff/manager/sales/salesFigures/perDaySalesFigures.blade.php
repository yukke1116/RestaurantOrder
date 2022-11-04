@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content">
    <h1>１日ごとの売れ数</h1>
    <table border="1">
        <thead>
            <tr>
                <th>日付</th>
                <th>売れ数</th>
            </tr>
        </thead>
        @foreach ($select as $row => $val)
        <tbody>
            <tr>
                <td>{{ $val -> time }}</td>
                <td>{{ $val -> quantity }}点</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    <form action="pdfPerDaySalesFigures/pdf" method="post">
    @csrf
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <label for="month" class="none"></label>
        <input type="text" name="month" id="month" value="@php echo $month; @endphp" class="none">
        <div class="buttonMenu">
            <button>出力</button>
        </div>
    </form>
    <form action="salesFigures" method="post">
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