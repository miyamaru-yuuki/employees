<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>変更画面</title>
</head>
<body>

<h1>変更画面</h1>

<form action="/employeeshenkoukanryou" method="post">
    {{ csrf_field() }}
    <p>部署名：<input type="text" name="did" value="{{$employeesData['did']}}"></p>
    <p>部署名：<input type="text" name="ename" value="{{$employeesData['ename']}}"></p>
    <p>部署名：<input type="text" name="address" value="{{$employeesData['address']}}"></p>
    <p>部署名：<input type="text" name="tel" value="{{$employeesData['tel']}}"></p>
    <input type="hidden" name="eid" value="{{$employeesData['eid']}}">
    <input type="submit" value="変更">
</form>

</body>
</html>