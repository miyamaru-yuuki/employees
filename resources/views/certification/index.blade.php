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

<h2>資格追加</h2>

<form action="/mycertificationaddkakunin" method="post">
    {{ csrf_field() }}
    <p>資格名：<input type="text" name="cname"></p>
    <input type="submit" value="追加">
</form>

</body>
</html>