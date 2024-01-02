<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
@include("inc.header")
@if(Request::is('/'))
    @include("inc.hero")
@endif
@include("inc.messages")
    <div style="display: flex; gap: 10px;">
        <div style="width: 70%;">@yield("content")</div>
        <div style="width: 25%;">@include("inc.aside")</div>
    </div>
@include("inc.footer")
</body>
</html>
