<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>削除確認</title>
</head>
<body>

<p>{{$departmentData->dname}}を削除しますか？</p>

<form action="/delkanryou" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="did" value="{{$departmentData['did']}}">
    <input type="submit" value="削除">
</form>

<a href="{{ url('/') }}">戻る</a>

</body>
</html>