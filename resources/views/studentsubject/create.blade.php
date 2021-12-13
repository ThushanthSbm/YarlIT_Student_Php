<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{route('studentsSubjects.store',$student->id)}}" method="post">
    @csrf

                @foreach($subjects as $subject)

                <label for="{{$subject->id}}" >
                    <input  type="checkbox"  name="subject[]" id="{{$subject->id}}" value="{{$subject->id}}">{{$subject->subject_name}}
                    </label>                                                                                                                     
                  <br>

                @endforeach

                <input  type="submit" >

    </form>
   
</body>
</html>