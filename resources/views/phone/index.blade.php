<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border = "1">
    <tr><th>ID</th><th>Phone No</th><th>Show</th><th>Edit</th><th>Delete</th></tr>
        @foreach ($phones as $phone)
        <tr>
       <td> {{$phone->id}}</td>
   <td> {{$phone->phone}}</td>
    <td><a href="{{route('phones.show' ,$phone->id)}}">Show</a></td>
    <td><a href="{{route('phones.edit' ,$phone->id)}}">Edit</a></td>
    <td>
        <form action="{{route('phones.destroy' ,$phone->id)}}" method="POST" onclick="return confirm('Do U Want Remove')">
            @csrf 
            @method('delete')
        <input type="submit" value="Delete">
</form></td>
    </tr>
    @endforeach
    </table>
    <form>
    <a href="{{route('phones.create' ,$phone->id)}}">Create</a>
</form>
</body>
</html>