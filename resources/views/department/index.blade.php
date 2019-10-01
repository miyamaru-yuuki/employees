<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>部署リスト</title>
</head>
<body>

<h1>部署リスト</h1>
<table>
    <tr><th>部署ID</th><th>部署名</th></tr>
    @foreach ($departmentList as $department)
        <tr><td>{{$department->did}}</td><td>{{$department->dname}}</td></tr>
    @endforeach
</table>

</body>
</html>