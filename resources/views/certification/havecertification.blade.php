<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>資格保有社員</title>
</head>
<body>

<h1>{{$certificationData->cname}}</h1>
<table>
    <tr><th>社員名</th><th>住所</th><th>電話番号</th><th>資格情報</th><th>編集</th><th>削除</th></tr>
    @foreach ($employeesCertificationData as $employees)
        <tr><td>{{$employees->ename}}</td><td>{{$employees->address}}</td><td>{{$employees->tel}}</td><td><a href="{{url('employeescertification/' .$employees->eid)}}">資格情報</a><td><a href="{{url('employeeshenkou/' .$employees->eid)}}">編集</a></td><td><a href="{{url('employeesdelkakunin/' .$employees->eid)}}">削除</a></td></tr>
    @endforeach
</table>

<p>保有人数：{{count($employeesCertificationData)}}人</p>

<a href="{{ url('showcertification/') }}">戻る</a>

</body>
</html>