@extends("layouts/app")
@section("title")
    Wellcome
@endsection
@section("content")
{{ session('success') }}
{{-- Це коментар, який не буде відображатися у вихідному HTML
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
--}}
<form action="/check" method="POST">
    @csrf
    <input type="text" name="username" placeholder="username" value="">
    @if ($errors->has('username'))
        <span class="error">{{ $errors->first('username') }}</span>
    @endif
    <!--<br>{{ session('err_username') }}--><br>
    <input type="email" name="eml" placeholder="email" value="{{ session('eml')}}">
    @if ($errors->has('eml'))
        <span class="error">{{ $errors->first('eml') }}</span>
    @endif
            <!--<br>{{ session('err_eml') }}--><br>
    <input type="password" name="pwd" placeholder="password">
    @if ($errors->has('pwd'))
        <span class="error">{{ $errors->first('pwd') }}</span>
    @endif
    <br>
    <textarea name="ta">{{ session('ta')}}</textarea>
    @if ($errors->has('ta'))
        <span class="error">{{ $errors->first('ta') }}</span>
    @endif
    <!--<br>{{ session('err_ta') }}--><br>
    <input type="submit" value="go">
</form>
@endsection
@section("aside")
    @parent
    <p>Дод. текст тільки для гол. сторінки</p>
@endsection
