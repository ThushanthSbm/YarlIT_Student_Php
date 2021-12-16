<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Subject Show Details</h1>
    <h3 style="text-align: center">Subject Name: {{$subject->subject_name}}</h3>
    <h3 style="text-align: center">Subject Color: {{ $extra->color }}</h3>
                <h3 style="text-align: center">Subject Index: {{ $extra->sub_index }}</h3>
                <h3 style="text-align: center">Subject Order: {{ $extra->order }}</h3>
    <form>
    <a href="{{route('subjects.create' ,$subject->id)}}">Create</a>
        <a href="{{route('subjects.index' ,$subject->id)}}">Index</a>
    </form>
</body>
</html>