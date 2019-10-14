<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>資格削除確認</title>
</head>
<body>

<p>{{$certificationData->cname}}</p>
<p>を削除しますか？</p>

<form action="/certificationdelkanryou" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="cid" value="{{$certificationData->cid}}">
    <input type="submit" value="削除">
</form>

<a href="{{ url('showcertification/') }}">戻る</a>

</body>
</html>