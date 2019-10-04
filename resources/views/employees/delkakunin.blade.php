<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>削除確認</title>
</head>
<body>

<p>{{$employeesData->did}}</p>
<p>{{$employeesData->ename}}</p>
<p>{{$employeesData->address}}</p>
<p>{{$employeesData->tel}}</p>
<p>を削除しますか？</p>

<form action="/employeesdelkanryou" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="eid" value="{{$employeesData->eid}}">
    <input type="submit" value="削除">
</form>

<a href="{{ url('/') }}">戻る</a>

</body>
</html>