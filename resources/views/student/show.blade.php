<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" >
            <h1 >Student List</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <!-- <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column"> -->
              <div class="card bg-light d-flex flex-fill" style="width:600px" margin-right:50px>
                <div class="card-header text-muted border-bottom-0" style="background-color:#85a3e0; text-align:center; font-size:20px;"><b>
                Student</b>
                </div>
                <div class="card-body pt-0"style="background-color:#ebf0fa;">
                  <div class="row">
                    <div class="col-7">
    <h1 class="lead" style="margin-left:40px;">Student Show Details</h1>
    <h3 class="lead" style="margin-left:40px;">First Name: {{$student->first_name}}</h3>
    <h3 class="lead" style="margin-left:40px;">Last Name: {{$student->last_name}}</h3>
    <h3 class="lead" style="margin-left:40px;">Gender: {{$student->gender}}</h3>
    <h3 class="lead" style="margin-left:40px;">Grade: {{$student->grade_id}}</h3>
    <h3 class="lead" style="margin-left:40px;">Address: {{$student->address}}</h3>
    <!-- <h3>Subject: {{$student->subject_id}}</h3> -->
    <h3 class="lead" style="margin-left:40px;">Date Of Birth: {{$student->date_of_birth}}</h3>
    <h3 class="lead" style="margin-left:40px;">Email: {{$student->mail}}</h3>
    <h3 class="lead" style="margin-left:40px;">Mobile No: {{$student->phone_id}}</h3>
    </div>
                    
              <!-- </div>
            </div>
            <div class="modal-footer"> -->

        




    
   
    
    
    
    <table class="table table-head-fixed table-hover table-striped project">
    
                  <thead>
                    <tr style="color:brown;">
        
                    </thead>
            <td colspan='3'><b>Subjects</b></td>
        </tr>
        @foreach($student_Subjects as $student_subject)
        <tr>
    <td>{{$student_subject->subject_name}}</td>
    
    
    </tbody>
                  @endforeach
                </table>
              </div>
            
            </div>

    </table>

        <!-- <a href="{{route('students.create' ,$student->id)}}">Create</a>
        <a href="{{route('students.index' ,$student->id)}}">Index</a>
        <a href="#" class="previous">&laquo; Previous</a> -->



<div class="modal-footer">
<a class="btn btn-success" href="{{route('students.create',$student->id)}}" role="button">Student Create</a>
<a class="btn btn-primary" href="{{route('students.index',$student->id)}}" role="button">Student list</a>
</div>
</div>
</body>
</html>