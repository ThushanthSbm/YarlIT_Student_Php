<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
@if($errors->any())
       @foreach($errors->all() as $error)
              {{$error}} 
       @endforeach
  @endif
  <div class="container">
<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Student Edit</h3>
                </div>

<form action ="{{route('students.update' ,$student->id)}}" method = "POST">

@csrf
@method('PUT')

<div class="card-body"style="background-color:lightblue">
                <div class="form-group">
<label for="fname">First Name</label>
<input type ="text" class="form-control" name="fname" id="fname" value="{{$student->first_name}}">
</div>
<br><br>


<div class="form-group">
<label for="lname">Last Name</label>
<input type ="text" class="form-control" name="lname" id="lname" value="{{$student->last_name}}">
</div>
<br><br>

<div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
<label for ="gender">Gender:</label>
<input type="radio" id="male" name="gender" value="male"<?php if($student-> gender=="male"){ 
        echo "checked";
       } ?>>
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female"<?php if($student-> gender=="female"){ 
        echo "checked";
       } ?>>
<label for="female">Female</label>
</div>
                       
                      </div>
<br><br>


<div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
<label for="grade">Select Grade</label>
<select name="grade" id="grade" class="form-control" >
@foreach($grades as $grade)
  <option value="{{$grade->grade_name}}"{{($student->grade_id === "$grade->grade_name") ? 'Selected' : ''}}>{{$grade->grade_name}}</option>

  @endforeach
</select>
</div>
                    </div>
<br><br>

<div class="form-group">
<label for="address">Address</label>
<textarea name="address" class="form-control" id="address" cols="30" rows="5" onkeyPress class="form-control">{{{$student->address}}}</textarea>
</div>
<br><br>

    <!-- {{ $student->subject_id}} -->
<?php $sub=explode(',',$student->subject_id)?>
<div class="form-group">
<label for="subject">Subjects</label><br>
@foreach($subjects as $subject)

<input type="checkbox" id="subject" name="subject[]" value="{{$subject->subject_name}}"<?php
    if(in_Array('$subject->subject_name',$sub)){
       echo'checked';
    }
    ?> >
<label for="subject"> {{$subject->subject_name}}</label>
@endforeach
</div>
                        
<br><br>

<div class="form-group">
<label for="birthday">Birthday:</label>
<input type="date" class="form-control" id="birthday" name="birthday"value="{{$student->date_of_birth}}">
</div>
<br><br>

<div class="form-group">
<label for="email">Enter your email:</label>
<input type="email" class="form-control" id="email" name="email"value="{{$student->mail}}">
</div>
<br><br>


<div class="form-group">
<label for="phone">Enter your phone number:</label>
<input type="tel" class="form-control" id="phone" name="phone" value="{{$student->phone_id}}">
</div>
<br><br>


<div class="card-footer">
                  <button type="submit" class="btn btn-success  btn-lg " value="save">Update</button>
                
<a href="{{route('students.index')}}" class="btn btn-primary btn-lg">Show All</a></div>


</form>
</div>
</div>
</body>
</html>