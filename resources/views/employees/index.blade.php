<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>社員リスト</title>
</head>
<body>

<h1>社員リスト</h1>
<table>
    <tr><th>社員名</th><th>住所</th><th>電話番号</th></tr>
    @foreach ($employeesList as $employees)
        <tr><td>{{$employees->ename}}</td><td>{{$employees->address}}</td><td>{{$employees->tel}}</td></tr>
    @endforeach
</table>

<form action="/henkoukanryou" method="post">
    {{ csrf_field() }}
    <p>部署名：<input type="text" name="dname" value="{{$departmentData['dname']}}"></p>
    <input type="hidden" name="did" value="{{$did}}">
    <input type="submit" value="変更">
</form>

<form action="/delkanryou" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="did" value="{{$did}}">
    <input type="submit" value="削除">
</form>

</body>
</html>