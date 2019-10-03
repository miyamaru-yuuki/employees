<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>変更画面</title>
</head>
<body>

<h1>変更画面</h1>

<form action="/henkoukanryou" method="post">
    {{ csrf_field() }}
    <p>部署名：<input type="text" name="dname" value="{{$departmentData['dname']}}"></p>
    <input type="hidden" name="did" value="{{$departmentData['did']}}">
    <input type="submit" value="変更">
</form>

</body>
</html>