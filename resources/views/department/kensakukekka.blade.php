<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>従業員検索結果</title>
</head>
<body>

<h1>従業員検索結果</h1>
<table>
    <tr><th>部署名</th><th>社員名</th><th>住所</th><th>電話番号</th><th>編集</th><th>削除</th></tr>
    @foreach ($employeesList as $employees)
        <tr><td>{{$employees->dname}}</td><td>{{$employees->ename}}</td><td>{{$employees->address}}</td><td>{{$employees->tel}}</td><td><a href="{{url('employeeshenkou/' .$employees->eid)}}">編集</a></td><td><a href="{{url('employeesdelkakunin/' .$employees->eid)}}">削除</a></td></tr>
    @endforeach
</table>

</body>
</html>