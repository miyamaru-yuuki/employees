<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>保有資格</title>
</head>
<body>

<h1>{{$employeesData['ename']}}</h1>
<table>
    <tr><th>資格名</th></tr>
    @foreach ($employeesCertificationdata as $data)
        <tr><td>{{$data->cname}}</td></tr>
    @endforeach
</table>

</body>
</html>