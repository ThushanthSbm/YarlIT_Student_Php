<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Mobile No: {{$phone->phone}}</h3>
    <form >
        <a href="{{route('phones.create' ,$phone->id)}}">Create</a>
        <a href="{{route('phones.index' ,$phone->id)}}">Index</a>
</form>
</body>
</html>