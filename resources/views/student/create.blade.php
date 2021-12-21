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
  <!-- @if($errors->any())
       @foreach($errors->all() as $error)
              {{$error}} 
       @endforeach
  @endif -->

  <div class="container">
  <div class="card card-primary"style="background-color:lightblue">

  <div class="card-header">
                <h3 class="card-title"> Student Registration Form</h3>
                <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
              </div>

 
<form action ="{{route('students.store')}}" method = "POST" enctype="multipart/form-data">

@csrf
<div class="card-body">
               
                <div class="form-group">
<label for="fname">First Name</label>
<input type ="text" class="form-control" name="fname" id="fname" placeholder="Type first name" value ="{{ old('fname')}}" class="@error('fname') is-invalid @enderror" ><br>
  @error('fname')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror<div class="input-group-append">
            
          </div>

               
<div class="form-group">
<label for="lname">Last Name</label>
<input type ="text" class="form-control" name="lname" id="lname" placeholder="Type last name" value ="{{ old('lname')}}" class="@error('lname') is-invalid @enderror" ><br>
  @error('lname')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror<div class="input-group-append">
            
          </div>



          <div class="form-group">
<label for ="gender">Gender:</label>
@error('gender') is-invalid @enderror
<input type="radio" id="male" name="gender" value="male" checked>
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
@error('gender')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div> 
                      </div>
<br><br>




<div class="col-sm-12">
                      <!-- select -->
                      <div class="form-group">
<label for="grade">Select Grade</label>
<select name="grade" id="grade" class="form-control @error('grade') is-invalid @enderror" value ="{{ old('grade')}}">
  @foreach($grades as $grade)
  <option value="{{$grade->grade_name}}">{{$grade->grade_name}}</option>
  @endforeach
</select>
@error('grade')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</div>
                      </div>
<br><br>


<div class="form-group">
<label for="address">Address :</label>
<textarea name="address" class="form-control" id="address" cols="30" rows="5"placeholder="type address" value ="{{ old('address')}}" class="@error('address') is-invalid @enderror" >
</textarea>
 @error('address')
 <div class="alert alert-danger">{{ $message }}</div>
@enderror<div class="input-group-append">
            
          </div>

<br><br>


         <div class="row">
                    <div class="col-sm-6">
                      <!-- checkbox -->
                      <div class="form-group">
                        <!-- <div class="form-check"> -->
<label for="subject" class=" @error('subject') is-invalid @enderror">Subjects</label><br>
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
@error('subject')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror</div>
                        </div>
                        <!-- </div> -->
</div>
<br><br>


<div class="form-group">
<label for="birthday">Birthday:</label>
<input type="date" class="form-control" id="birthday" name="birthday"  value ="{{ old('birthday')}}" class="@error('birthday') is-invalid @enderror" ><br>
  @error('birthday')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror<div class="input-group-append">
            
          </div>
<br><br>


<div class="form-group">
<label for="email">Enter your email:</label>
<input type="email" class="form-control" id="email" name="email" placeholder="Type email address" value ="{{ old('email')}}" class="@error('email') is-invalid @enderror" ><br>
  @error('email')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror<div class="input-group-append">
            
          </div>
<br><br>


<div class="form-group">
<label for="phone">Enter your phone number:</label>
<input type="phone" class="form-control" id="phone" name="phone" placeholder="Type phone no" value ="{{ old('phone')}}" class="@error('phone') is-invalid @enderror" ><br>
  @error('phone')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror<div class="input-group-append">
            
          </div>
<br><br>


<!-- <input type="submit" value="Save"> -->

<div class="card-footer">
                <a href="{{route('students.index')}}" class="btn btn-secondary btn-lg">Cancel</a>
                  <button type="submit" class="btn btn-primary  btn-lg  " value="save">Submit</button>
                </div>
                </div>



</form>
</div>
</div>
</body>
</html>