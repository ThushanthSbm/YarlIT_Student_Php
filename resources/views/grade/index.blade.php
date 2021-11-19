<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table  border="1">
        <tr><th>ID</th><th>Grade Name</th><th>Show</th><th>Edit</th><th>Delete</th></tr>
        @foreach ($grades as $grade)
        <tr>
       <td> {{$grade->id}}</td>
   <td> {{$grade->grade_name}}</td>
   <td><a href="{{route('grades.show' ,$grade->id)}}">Show</a></td>
    <td><a href="{{route('grades.edit' ,$grade->id)}}">Edit</a></td>
    <td>
        <form action="{{route('grades.destroy' ,$grade->id)}}" method="POST" onclick="return confirm('Do U Want Remove')">
            @csrf 
            @method('delete')
        <input type="submit" value="Delete">
</form></td>
    </tr>
    @endforeach
    </table>
    <form>
    <a href="{{route('grades.create' ,$grade->id)}}">Create</a>
    </form>
</body>
</html>