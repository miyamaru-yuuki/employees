<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <title>資格変更画面</title>
</head>
<body>

<h1>資格変更画面</h1>

<form action="/mycertificationhenkoukanryou" method="post">
    {{ csrf_field() }}
    <div>資格名：
        <select name="cid">
            @foreach($certificationData as $data)
                @if($employeesCertificationData['cid'] == $data['cid'])
                    <option value="{{$data['cid']}}" selected>{{$data['cname']}}</option>
                @else
                    <option value="{{$data['cid']}}">{{$data['cname']}}</option>
                @endif
            @endforeach
        </select>
    </div>
    <input type="hidden" name="ecid" value="{{$employeesCertificationData['ecid']}}">
    <input type="hidden" name="eid" value="{{$employeesCertificationData['eid']}}">
    <input type="submit" value="変更">
</form>

<a href="{{ url('employeescertification/' .$employeesCertificationData['eid']) }}">戻る</a>

</body>
</html>