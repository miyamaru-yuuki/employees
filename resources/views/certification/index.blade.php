<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>資格リスト</title>
</head>
<body>

<h1>資格リスト</h1>
<table>
    <tr><th>社員ID</th><th>資格名</th></tr>
    @foreach ($employeesCertificationdata as $data)
        <tr><td>{{$data->eid}}</td><td>{{$data->cname}}</td></tr>
    @endforeach
</table>

</body>
</html>