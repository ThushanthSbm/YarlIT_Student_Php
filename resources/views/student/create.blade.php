<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- @if($errors->any())
       @foreach($errors->all() as $error)
              {{$error}} 
       @endforeach
  @endif -->


<form action ="{{route('students.store')}}" method = "POST">

@csrf
<label for="fname">First Name</label>
<input type ="text" name="fname" id="fname" placeholder="Type first name" value ="{{ old('fname')}}" class="@error('fname') is-invalid @enderror" ><br>
  @error('fname')
   <span style="color:red"> {{ $message }}</span>
@enderror
<br><br>
<label for="lname">Last Name</label>
<input type ="text" name="lname" id="lname" placeholder="Type last name" value ="{{ old('lname')}}" class="@error('lname') is-invalid @enderror" ><br>
  @error('lname')
  <span style="color:red"> {{ $message }}</span>
@enderror
<br><br>
<label for ="gender">Gender:</label>
@error('gender') is-invalid @enderror
<input type="radio" id="male" name="gender" value="male" checked>
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
@error('gender')
<span style="color:red"> {{ $message }}</span>
@enderror
<br><br>
<label for="grade">Select Grade</label>

<select name="grade" id="grade">
  @foreach($grades as $grade)
  <option value="{{$grade->grade_name}}">{{$grade->grade_name}}</option>
  @endforeach
</select>
<br><br>
<label for="address">Address :</label>
<textarea name="address" id="address" cols="30" rows="5"placeholder="type address" value ="{{ old('address')}}" class="@error('address') is-invalid @enderror" >
</textarea>
 @error('address')
  <span style="color:red"> {{ $message }}</span>
@enderror
<br><br>
<label for="subject">Subjects</label><br>
@foreach($subjects as $subject)
<input type="checkbox" id="subject" name="subject[]" value="{{$subject->subject_name}}"  >
<label for="subject"> {{$subject->subject_name}}</label>
@endforeach
<!-- <input type="checkbox" id="Science" name="subject[]" value="Science">
<label for="Science"> Science</label>
<input type="checkbox" id="Tamil" name="subject[]" value="Tamil">
<label for="Tamil"> Tamil</label>
<input type="checkbox" id="English" name="subject[]" value="English">
<label for="English"> English</label> -->
<br><br>
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday"  value ="{{ old('birthday')}}" class="@error('birthday') is-invalid @enderror" ><br>
  @error('birthday')
  <span style="color:red"> {{ $message }}</span>
@enderror
<br><br>
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email" placeholder="Type email address" value ="{{ old('email')}}" class="@error('email') is-invalid @enderror" ><br>
  @error('email')
  <span style="color:red"> {{ $message }}</span>
@enderror
<br><br>
<label for="phone">Enter your phone number:</label>
<input type="phone" id="phone" name="phone" placeholder="Type phone no" value ="{{ old('phone')}}" class="@error('phone') is-invalid @enderror" ><br>
  @error('phone')
  <span style="color:red"> {{ $message }}</span>
@enderror
<br><br>
<input type="submit" value="Save">


</form>
</body>
</html>