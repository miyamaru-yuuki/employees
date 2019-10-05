<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>部署リスト</title>
</head>
<body>

<h1>部署リスト</h1>
<table>
    <tr><th>部署ID</th><th>部署名</th><th>編集</th><th>削除</th></tr>
    @foreach ($departmentList as $department)
        <tr><td>{{$department->did}}</td><td><a href="{{url('showemployees/' .$department->did)}}">{{$department->dname}}</a></td><td><a href="{{url('henkou/' .$department->did)}}">編集</a></td><td><a href="{{url('delkakunin/' .$department->did)}}">削除</a></td></tr>
    @endforeach
</table>

<h2>追加</h2>

<form action="/addkakunin" method="post">
    {{ csrf_field() }}
    <p>部署名：<input type="text" name="dname"></p>
    <input type="submit" value="追加">
</form>

<h2>キーワード検索</h2>

<form action="/ekensaku" method="get">
    {{ csrf_field() }}
    <div>検索項目:
    <select name="kensakunumber">
        <option value="1">従業員名</option>
        <option value="2">住所</option>
        <option value="3">電話番号</option>
    </select>
    </div>
    <p>検索ワード：<input type="text" name="keyword"></p>
    <input type="submit" value="検索">
</form>

</body>
</html>