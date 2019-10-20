<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>資格リスト</title>
</head>
<body>

<h1>資格リスト</h1>
<table>
    <tr><th>資格ID</th><th>資格名</th><th>編集</th><th>削除</th></tr>
    @foreach ($certificationData as $data)
        <tr><td>{{$data->cid}}</td><td><a href="{{url('havecertification/' .$data->cid)}}">{{$data->cname}}</a></td><td><a href="{{url('certificationhenkou/' .$data->cid)}}">編集</a></td><td><a href="{{url('certificationdelkakunin/' .$data->cid)}}">削除</a></td></tr>
    @endforeach
</table>

<h2>資格追加</h2>

<form action="/certificationaddkakunin" method="post">
    {{ csrf_field() }}
    <p>資格名：<input type="text" name="cname"></p>
    <input type="submit" value="追加">
</form>

</body>
</html>