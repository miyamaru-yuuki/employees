<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>資格追加確認</title>
</head>
<body>

<p>{{$certificationData['cname']}}を追加しますか？</p>

<form action="/mycertificationaddkanryou" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="cid" value="{{$certificationData['cid']}}">
    <input type="hidden" name="eid" value="{{$eid}}">
    <input type="submit" value="追加">
</form>

<a href="{{ url('employeescertification/' .$eid) }}">戻る</a>

</body>
</html>