<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="{{route('subjects.update' ,$subject->id)}}" method = "POST">

@csrf
@method('PUT')
<label for="sname">Subject Name</label>
<input type ="text" name="sname" id="sname" value="{{$subject->subject_name}}">
<input type="submit" value="Save">
<a href="{{route('subjects.index')}}">Show All</a>
</body>
</html>