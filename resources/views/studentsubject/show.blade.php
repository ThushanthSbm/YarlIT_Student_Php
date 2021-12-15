<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        
            <tr>
                <td colspan='3'>Subjects</td>
            </tr>
        
       
        @foreach($student_Subjects as $student_subject)
       

        <td>{{$student_subject->subject_name}}</td>
       
        

        @endforeach
    
      

        </table>
</body>
</html>