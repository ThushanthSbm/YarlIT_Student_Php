<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="{{route('subjects.store')}}" method = "POST">

@csrf
<label for="sname">Subject Name</label>
<input type ="text" name="sname" id="sname">
<input type="submit" value="Save">
</body>
</html>