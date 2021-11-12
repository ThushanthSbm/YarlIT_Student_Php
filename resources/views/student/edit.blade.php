<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="{{route('students.update' ,$student->id)}}" method = "POST">

@csrf
@method('PUT')
<label for="fname">First Name</label>
<input type ="text" name="fname" id="fname" value="{{$student->first_name}}">
<br>
<label for="lname">Last Name</label>
<input type ="text" name="lname" id="lname" value="{{$student->last_name}}">

<input type="submit" value="Save">
<a href="{{route('students.index')}}">Show All</a>
</form>
</body>
</html>