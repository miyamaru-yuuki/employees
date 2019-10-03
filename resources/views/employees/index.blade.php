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

</body>
</html>