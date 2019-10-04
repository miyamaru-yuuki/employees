<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>追加確認</title>
</head>
<body>

<p>部署ID:{{$did}}</p>
<p>従業員名：{{$ename}}</p>
<p>住所：{{$address}}</p>
<p>電話番号：{{$tel}}</p>
<p>を追加しますか？</p>

<form action="/employeesaddkanryou" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="did" value="{{$did}}">
    <input type="hidden" name="ename" value="{{$ename}}">
    <input type="hidden" name="address" value="{{$address}}">
    <input type="hidden" name="tel" value="{{$tel}}">
    <input type="submit" value="追加">
</form>

<a href="{{ url('/') }}">戻る</a>

</body>
</html>