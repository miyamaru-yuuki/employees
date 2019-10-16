<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>保有資格</title>
</head>
<body>

<h1>{{$employeesData['ename']}}</h1>
<table>
    <tr><th>資格名</th><th>編集</th><th>削除</th></tr>
    @foreach ($employeesCertificationdata as $data)
        <tr><td>{{$data->cname}}</td><td><a href="{{url('mycertificationhenkou/' .$data->ecid)}}">編集</a></td><td><a href="{{url('mycertificationdelkakunin/' .$data->ecid)}}">削除</a></td></tr>
    @endforeach
</table>

<h2>資格追加</h2>

<form action="/mycertificationaddkakunin" method="post">
    {{ csrf_field() }}
    <div>資格名：
        <select name="cid">
            @foreach($certificationData as $data)
                    <option value="{{$data['cid']}}">{{$data['cname']}}</option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="eid" value="{{$employeesData['eid']}}">
    <input type="submit" value="追加">
</form>

<a href="{{ url('showemployees/' .$employeesData['did']) }}">戻る</a>

</body>
</html>