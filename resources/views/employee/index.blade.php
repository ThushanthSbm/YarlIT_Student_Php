<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employee Index</h1>
    <br>
    @foreach ($employees as $employee)
    {{$employee->id}}
    {{$employee->first_name}}
    {{$employee->last_name}}
    {{$employee->date_of_birth}}
    {{$employee->basic_salary}}
    <br>
    @endforeach
    <table border="1">
    @foreach ($employees as $employee)
    <tr>
   <td> {{$employee->id}}</td>
  <td>  {{$employee->first_name}}</td>
   <td> {{$employee->last_name}}</td>
   <td>{{$employee->date_of_birth}}</td>
   <td> {{$employee->basic_salary}}</td>
    </tr>
    @endforeach
    </table>
</body>
</html>