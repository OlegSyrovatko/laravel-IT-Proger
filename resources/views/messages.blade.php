@extends("layouts/app")
@section("title")
    Messages
@endsection
@section("content")
    <h1>Messages</h1>
    @foreach($data as $el)
<h2>{{$el -> username}}</h2>
<p>{{$el -> email}}</p>
<p>{{$el -> pwd}}</p>

<small>{{$el -> created_at}}</small>
<a href="{{ route('contact-data-one', $el -> id)}}">See more...</a>
    @endforeach
@endsection

