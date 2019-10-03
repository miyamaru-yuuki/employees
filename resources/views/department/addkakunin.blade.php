<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>追加確認</title>
</head>
<body>

<p>{{$dname}}を追加しますか？</p>

<form action="/addkanryou" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="dname" value="{{$dname}}">
    <input type="submit" value="追加">
</form>

<a href="{{ url('/') }}">戻る</a>

</body>
</html>