<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>資格変更画面</title>
</head>
<body>

<h1>資格変更画面</h1>

<form action="/certificationhenkoukanryou" method="post">
    {{ csrf_field() }}
    <p>資格名：<input type="text" name="cname" value="{{$certificationData['cname']}}"></p>
    <input type="hidden" name="cid" value="{{$certificationData['cid']}}">
    <input type="submit" value="変更">
</form>

</body>
</html>