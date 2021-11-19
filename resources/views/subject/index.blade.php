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
        <tr><th>ID</th><th>Subject Name</th><th>Show</th><th>Edit</th><th>Delete</th></tr>
        @foreach ($subjects as $subject)
        <tr>
       <td> {{$subject->id}}</td>
   <td> {{$subject->subject_name}}</td>
   <td><a href="{{route('subjects.show' ,$subject->id)}}">Show</a></td>
    <td><a href="{{route('subjects.edit' ,$subject->id)}}">Edit</a></td>
    <td>
        <form action="{{route('subjects.destroy' ,$subject->id)}}" method="POST" onclick="return confirm('Do U Want Remove')">
            @csrf 
            @method('delete')
        <input type="submit" value="Delete">
</form></td>
    </tr>
    @endforeach
    </table>
    <form>
    <a href="{{route('subjects.create' ,$subject->id)}}">Create</a>
    </form>
</body>
</html>