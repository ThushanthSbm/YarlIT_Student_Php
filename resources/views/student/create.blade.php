<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  @if($errors->any())
       @foreach($errors->all() as $error)
              {{$error}} 
       @endforeach
  @endif
<form action ="{{route('students.store')}}" method = "POST">

@csrf
<label for="fname">First Name</label>
<input type ="text" name="fname" id="fname">
<br><br>
<label for="lname">Last Name</label>
<input type ="text" name="lname" id="lname">
<br><br>
<label for ="gender">Gender:</label>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<br><br>
<label for="grade">Select Grade</label>

<select name="grade" id="grade">
  @foreach($grades as $grade)
  <option value="{{$grade->id}}">{{$grade->grade_name}}</option>
  @endforeach
</select>
<br><br>
<label for="address">Address</label>
<textarea name="address" id="address" cols="30" rows="5"></textarea>
<br><br>
<label for="subject">Subjects</label><br>
<input type="checkbox" id="Science" name="subject[]" value="Science">
<label for="Science"> Science</label>
<input type="checkbox" id="Tamil" name="subject[]" value="Tamil">
<label for="Tamil"> Tamil</label>
<input type="checkbox" id="English" name="subject[]" value="English">
<label for="English"> English</label>
<br><br>
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday" >
<br><br>
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email">
<br><br>
<label for="phone">Enter your phone number:</label>
<input type="phone" id="phone" name="phone" >
<br><br>
<input type="submit" value="Save">


</form>
</body>
</html>