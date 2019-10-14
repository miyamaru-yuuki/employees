<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>資格追加確認</title>
</head>
<body>

<p>{{$cname}}を追加しますか？</p>

<form action="/mycertificationaddkanryou" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="cname" value="{{$cname}}">
    <input type="submit" value="追加">
</form>

<a href="{{ url('showcertification/') }}">戻る</a>

</body>
</html>