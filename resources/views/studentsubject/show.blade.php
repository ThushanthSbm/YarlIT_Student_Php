<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table >
        
            <tr>
                <td>Subjects</td>
            </tr>
        
       
        @foreach($student_Subjects as $student_subject)
        <tr>

        <td>{{$student_subject->subject_name}}</td>
        </tr>
        

        @endforeach
    
      

        </table>
</body>
</html>