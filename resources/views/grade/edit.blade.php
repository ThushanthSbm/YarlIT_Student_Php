<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="{{route('grades.update' ,$grade->id)}}" method = "POST">

@csrf
@method('PUT')
<label for="gname">Grade Name</label>
<input type ="text" name="gname" id="gname" value="{{$grade->grade_name}}">
<input type="submit" value="Save">
<a href="{{route('grades.index')}}">Show All</a>
</body>
</html>