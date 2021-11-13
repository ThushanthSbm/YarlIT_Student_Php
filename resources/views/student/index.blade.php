<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Index</h1>
    <br>
    @foreach ($students as $student)
    {{$student->id}}
    {{$student->first_name}}
    {{$student->last_name}}
    {{$student->gender}}
    {{$student->grade}}
    {{$student->address}}
    {{$student->subject}}
    {{$student->date_of_birth}}
    {{$student->mail}}
    {{$student->phone}}
    <br>
    @endforeach
    <table border="1">
        <tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Grade</th><th>Address</th><th>Subjects</th><th>Date OF Birth</th><th>Email</th><th>Mobile Number</th><th>Show</th><th>Edit</th><th>Delete</th></tr>
    @foreach ($students as $student)
    <tr>
   <td> {{$student->id}}</td>
   <td> {{$student->first_name}}</td>
    <td>{{$student->last_name}}</td>
    <td>{{$student->gender}}</td>
    <td>{{$student->grade}}</td>
    <td>{{$student->address}}</td>
    <td>{{$student->subject}}</td>
    <td>{{$student->date_of_birth}}</td>
    <td>{{$student->mail}}</td>
    <td>{{$student->phone}}</td>
    <td><a href="{{route('students.show' ,$student->id)}}">Show</a></td>
    <td><a href="{{route('students.edit' ,$student->id)}}">Edit</a></td>
    <td>
        <form action="{{route('students.destroy' ,$student->id)}}" method="POST">
            @csrf 
            @method('delete')
        <input type="submit" value="Delete">
</form></td>
    </tr>
    @endforeach
    </table>

</body>
</html>