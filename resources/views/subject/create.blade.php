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
<input type ="text" name="sname" id="sname"placeholder="type subject name" value ="{{ old('sname')}}" class="@error('sname') is-invalid @enderror" >
</textarea>
 @error('sname')
  <span style="color:red"> {{ $message }}</span>
@enderror
<br><br>
        <label for="color">Subject Color</label>
        <input type="text" id="color" name="color" placeholder="type subject color"value ="{{ old('color')}}" class="@error('color') is-invalid @enderror" >
</textarea>
 @error('color')
  <span style="color:red"> {{ $message }}</span>
@enderror<br><br>
        <label for="sub_index">Subject Index</label>
        <input type="text" id="sub_index" name="sub_index" placeholder="type subject index" value ="{{ old('sub_index')}}" class="@error('sub_index') is-invalid @enderror" >
</textarea>
 @error('sub_index')
  <span style="color:red"> {{ $message }}</span>
@enderror<br><br>
        <label for="order">Subject Order</label>
        <input type="text" id="order" name="order" placeholder="type subject order" value ="{{ old('order')}}" class="@error('order') is-invalid @enderror" >
</textarea>
 @error('order')
  <span style="color:red"> {{ $message }}</span>
@enderror<br><br>
<input type="submit" value="Save">
</body>
</html>