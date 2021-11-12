<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Employees Show Details</h1>
    <h3>First Name: {{$employee->first_name}}</h3>
    <h3>Last Name: {{$employee->last_name}}</h3>
    <h3>Birth Of Date: {{$employee->date_of_birth}}</h3>
    <h3>Basic Salary: {{$employee->basic_salary}}</h3>
</body>
</html>