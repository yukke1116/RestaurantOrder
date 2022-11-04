@extends('restaurant.layout.layoutManager')
@section('content')
<div class="content" id="fileContent">
    <h1>メニュー編集</h1>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="editCompleteMenu" method="post" enctype="multipart/form-data">
    @csrf
    @foreach ($select as $row => $val )
        <label for="restaurant_name" class="none"></label>
        <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
        <label for="name_or_position" class="none"></label>
        <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
        <label for="id" class="none"></label>
        <input type="text" name="id" id="id" value="{{ $val -> id }}" class="none">
        <div class="form">
            <p>画像</p>
            <label for="image"></label>
            <input type="file" name="image" id="image" value="{{ $val -> image }}">
        </div>
        <div class="form">
            <p>メニュー名</p>
            <label for="menu_name"></label>
            <input type="text" name="menu_name" id="menu_name" value="{{ $val -> menu_name }}">
        </div>
        <div class="form">
            <p>価格</p>
            <label for="price"></label>
            <input type="text" name="price" id="price" value="{{ $val -> price }}">
        </div>
        <div class="form">
            <p>説明</p>
            <label for="detail"></label>
            <textarea name="detail" id="detail" cols="23" rows="10">{{ $val -> detail }}</textarea>
        </div>
        <div class="enterButton">
            <button onclick="return confirm('下記内容で編集してよろしいですか？')">編集</button>
        </div>
    @endforeach
    </form>
    <div>
        <form action="menuManagement" method="post">
        @csrf
            <label for="restaurant_name" class="none"></label>
            <input type="text" name="restaurant_name" id="restaurant_name" value="@php echo $restaurant_name; @endphp" class="none">
            <label for="name_or_position" class="none"></label>
            <input type="text" name="name_or_position" id="name_or_position" value="@php echo $name_or_position; @endphp" class="none">
            <div class="enterButton">
                <button type="submit">戻る</button>
            </div>
        </form>
    </div>
</div>
@endsection