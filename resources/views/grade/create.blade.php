<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="{{route('grades.store')}}" method = "POST">

@csrf
<label for="gname">Grade Name</label>
<input type ="text" name="gname" id="gname"placeholder="type grade" value ="{{ old('gname')}}" class="@error('gname') is-invalid @enderror" >
</textarea>
 @error('gname')
  <span style="color:red"> {{ $message }}</span>
@enderror 
<br><br>
<input type="submit" value="Save">
</body>
</html>