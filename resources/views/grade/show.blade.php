<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Grade Show Details</h1>
    <h3>Grade Name: {{$grade->grade_name}}</h3>
    <form>
    <a href="{{route('grades.create' ,$grade->id)}}">Create</a>
        <a href="{{route('grades.index' ,$grade->id)}}">Index</a>
    </form>
</body>
</html>