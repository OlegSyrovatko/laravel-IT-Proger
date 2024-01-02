@extends("layouts/app")
@section("title")
   Contact Update
@endsection
@section("content")
    <h1>Contact Update</h1>

<form action="{{route('contact-update-submit', $data->id)}}" method="POST">
    @csrf
    username:
    <input type="text" name="username" placeholder="username" value="{{$data->username}}">
    @if ($errors->has('username'))
        <span class="error">{{ $errors->first('username') }}</span>
    @endif
    <br>
    email:
    <input type="email" name="eml" placeholder="email" value="{{$data->email}}">
    @if ($errors->has('eml'))
        <span class="error">{{ $errors->first('eml') }}</span>
    @endif
    <br>
    password:
    <input type="text" name="pwd" placeholder="password" value="{{$data->pwd}}">
    @if ($errors->has('pwd'))
        <span class="error">{{ $errors->first('pwd') }}</span>
    @endif
    <br>
    textarea:
    <textarea name="ta">{{$data->ta}}</textarea>
    @if ($errors->has('ta'))
        <span class="error">{{ $errors->first('ta') }}</span>
    @endif
    <br>
    <input type="submit" value="update">
</form>
@endsection
@section("aside")
    @parent
    <p>Дод. текст тільки для гол. сторінки</p>
@endsection
