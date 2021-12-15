<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Show Details</h1>
    <h3>First Name: {{$student->first_name}}</h3>
    <h3>Last Name: {{$student->last_name}}</h3>
    <h3>Gender: {{$student->gender}}</h3>
    <h3>Grade: {{$student->grade_id}}</h3>
    <h3>Address: {{$student->address}}</h3>
    <!-- <h3>Subject: {{$student->subject_id}}</h3> -->
    <h3>Date Of Birth: {{$student->date_of_birth}}</h3>
    <h3>Email: {{$student->mail}}</h3>
    <h3>Mobile No: {{$student->phone_id}}</h3>
    
    <table border="1">
        
        <tr>
            <td colspan='3'><b>Subjects</b></td>
        </tr>
    
   
    @foreach($student_Subjects as $student_subject)
    

    <td>{{$student_subject->subject_name}}</td>
    
    

    @endforeach

  

    </table>
    <form >
        <a href="{{route('students.create' ,$student->id)}}">Create</a>
        <a href="{{route('students.index' ,$student->id)}}">Index</a>
        <a href="#" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>

<a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>
</form>
</body>
</html>