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
    <h1>Student Edit Details</h1>
<form action ="{{route('students.update' ,$student->id)}}" method = "POST">

@csrf
@method('PUT')
<label for="fname">First Name</label>
<input type ="text" name="fname" id="fname" value="{{$student->first_name}}">
<br><br>
<label for="lname">Last Name</label>
<input type ="text" name="lname" id="lname" value="{{$student->last_name}}"><br><br>
<label for ="gender">Gender:</label>
<input type="radio" id="male" name="gender" value="male"<?php if($student-> gender=="male"){ 
        echo "checked";
       } ?>>
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female"<?php if($student-> gender=="female"){ 
        echo "checked";
       } ?>>
<label for="female">Female</label>
<br><br>
<label for="grade">Select Grade</label>
<select name="grade" id="grade">
@foreach($grades as $grade)
  <option value="{{$grade->grade_name}}"{{($student->grade_id === "$grade->grade_name") ? 'Selected' : ''}}>{{$grade->grade_name}}</option>

  @endforeach
</select>
<br><br>
<label for="address">Address</label>
<textarea name="address" id="address" cols="30" rows="5" onkeyPress class="form-control">{{{$student->address}}}</textarea>
<br><br>
    <!-- {{ $student->subject_id}} -->
<?php $sub=explode(',',$student->subject_id)?>

<label for="subject">Subjects</label><br>
@foreach($subjects as $subject)

<input type="checkbox" id="subject" name="subject[]" value="{{$subject->subject_name}}"<?php
    if(in_Array('$subject->subject_name',$sub)){
       echo'checked';
    }
    ?> >
<label for="subject"> {{$subject->subject_name}}</label>
@endforeach

<br><br>
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday"value="{{$student->date_of_birth}}">
<br><br>
<label for="email">Enter your email:</label>
<input type="email" id="email" name="email"value="{{$student->mail}}">
<br><br>
<label for="phone">Enter your phone number:</label>
<input type="tel" id="phone" name="phone" value="{{$student->phone_id}}">
<br><br>
<input type="submit" value="Save">
<a href="{{route('students.index')}}">Show All</a>
<a href="#" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>

</form>
</body>
</html>