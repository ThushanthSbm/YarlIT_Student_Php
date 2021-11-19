<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="{{route('phones.update' ,$phone->id)}}" method = "POST">

@csrf
@method('PUT')
<label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" value="{{$phone->phone}}">
<br><br>
<input type="submit" value="Save">
<a href="{{route('phones.index')}}">Show All</a>
</body>
</html>