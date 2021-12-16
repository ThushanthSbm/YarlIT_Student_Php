<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="{{route('phones.store')}}" method = "POST">

@csrf
<label for="phone">Enter your phone number:</label>
<input type="phone" id="phone" name="phone" placeholder="type phone no" value ="{{ old('phone')}}" class="@error('phone') is-invalid @enderror" >
</textarea>
 @error('phone')
  <span style="color:red"> {{ $message }}</span>
@enderror
<br><br>
<input type="submit" value="Save">
</body>
</html>