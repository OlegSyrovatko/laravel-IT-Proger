@extends("layouts/app")
@section("title")
     {{$data -> username}}
@endsection
@section("content")
    <h1>{{$data -> username}}</h1>

<p>{{$data -> email}}</p>
<p>{{$data -> pwd}}</p>
<p>{{$data -> ta}}</p>
<small>{{$data -> created_at}}</small>
    <a href="{{ route('contact-update', $data -> id)}}">update...</a>
    <a href="{{ route('contact-delete', $data -> id)}}">delete...</a>
@endsection

