<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee Edit Details</h1>
<form action ="{{route('employees.update' ,$employee->id)}}" method = "POST">

@csrf
@method('PUT')
<label for="fname">First Name</label>
<input type ="text" name="fname" id="fname" value="{{$employee->first_name}}">
<br>
<label for="lname">Last Name</label>
<input type ="text" name="lname" id="lname" value="{{$employee->last_name}}">
<br>
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday" value="{{$employee->date_of_birth}}">
<br>
<label for="bsalary">Basic Salary</label>
<input type ="text" name="bsalary" id="bsalary" value="{{$employee->basic_salary}}"> 
<br>
<input type="submit" value="Save"><br>
<a href="{{route('students.index')}}">Show All</a>
</form>
</body>
</html>