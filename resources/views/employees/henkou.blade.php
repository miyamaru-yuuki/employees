<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>変更画面</title>
</head>
<body>

<h1>変更画面</h1>

<form action="/employeeshenkoukanryou" method="post">
    {{ csrf_field() }}
    <div>部署名：
        <select name="did">
            @foreach($departmentList as $department)
                @if($department['did'] == $employeesData['did'])
                    <option value="{{$department['did']}}" selected>{{$department['dname']}}</option>
                @else
                    <option value="{{$department['did']}}">{{$department['dname']}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <p>従業員名：<input type="text" name="ename" value="{{$employeesData['ename']}}"></p>
    <p>住所：<input type="text" name="address" value="{{$employeesData['address']}}"></p>
    <p>電話番号：<input type="text" name="tel" value="{{$employeesData['tel']}}"></p>
    <input type="hidden" name="eid" value="{{$employeesData['eid']}}">
    <input type="submit" value="変更">
</form>

</body>
</html>