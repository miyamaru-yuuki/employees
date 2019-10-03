<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>社員リスト</title>
</head>
<body>

<h1>社員リスト</h1>
<table>
    <tr><th>社員名</th><th>住所</th><th>電話番号</th><th>編集</th><th>削除</th></tr>
    @foreach ($employeesList as $employees)
        <tr><td>{{$employees->ename}}</td><td>{{$employees->address}}</td><td>{{$employees->tel}}</td><td><a href="{{url('employeeshenkou/' .$employees->eid)}}">編集</a></td><td><a href="{{url('employeesdelkakunin/' .$employees->eid)}}">削除</a></td></tr>
    @endforeach
</table>

<h2>追加</h2>

<form action="/employeesaddkakunin" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="did" value="{{$employees->did}}">
    <p>従業員名：<input type="text" name="ename"></p>
    <p>住所：<input type="text" name="address"></p>
    <p>電話番号：<input type="text" name="tel"></p>
    <input type="submit" value="追加">
</form>

</body>
</html>