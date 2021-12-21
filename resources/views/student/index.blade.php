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
    
@if(Session::has('message'))
 <p style="color:green">{{Session::get('message')}}</p>
@endif

<div class="container">
<div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
              <div class="row">
              <div class="col-md-6">
                <h3 class="card-title" style="margin-left:100px; font-size:20px;"><b>Student Details</b></h3>
                
                </div>
                <!-- <div class="col-md-4">
                <form action="{{ route('students.index') }}" method="GET" role="search">

                    <div class="input-group"style="margin-left=30px;">
                        
                        <input type="text" class="form-control mr-2" name="term" placeholder="Search student" id="term">
                        <span class="input-group-btn mr-6 mt-0">
                            <button class="btn btn-secondary" type="submit" title="Search student">
                                <span class="fas fa-search"></span>
                            </button>
                        </span><a href="{{ route('students.index') }}" class=" mt-0">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Refresh page">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </form>
            </div> -->
            <div class="col-md-2">
    <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
              </div>
              </div>
              </div>
              </div>

              @if(session('status'))
<div class ="alert alert-success">
   {{session('status')}}
   </div>
@endif

    <!-- @foreach ($students as $student)
    {{$student->id}}
    {{$student->first_name}}
    {{$student->last_name}}
    {{$student->gender}}
    {{$student->grade_id}}
    {{$student->address}}
    {{$student->subject}}
    {{$student->date_of_birth}}
    {{$student->mail}}
    {{$student->phone_id}}
    <br>
    @endforeach -->

    <div class="card-body table-responsive p-6" style="height: 300px; background-color:#ffcccc">
                <table class="table table-head-fixed table-hover table-striped project">
                  <thead>
                    <tr style="color:brown;">
    
        <th>ID</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Grade</th><th>Address</th><th>Subjects</th><th>Date OF Birth</th><th>Email</th><th>Mobile Number</th><th>Status</th><th>Actions</th></tr>
        </thead>
         @foreach ($students as $student)
    <tr>
   <td> {{$student->id}}</td>
   <td> {{$student->first_name}}</td>
    <td>{{$student->last_name}}</td>
    <td>{{$student->gender}}</td>
    <td>{{$student->grade_id}}</td>
    <td>{{$student->address}}</td>
    <td><a href="{{route('studentSubjects.crea', $student->id)}}">Add Subject</a></td>
    <td>{{$student->date_of_birth}}</td>
    <td>{{$student->mail}}</td>
    <td>{{$student->phone_id}}</td>
    <!-- <td><a href="{{route('students.show' ,$student->id)}}">Show</a></td>
    <td><a href="{{route('students.edit' ,$student->id)}}">Edit</a></td>
    <td>
        <form action="{{route('students.destroy' ,$student->id)}}" method="POST" onclick="return confirm('Do U Want Remove')">
            @csrf 
            @method('delete')
        <input type="submit" value="Delete">
</form></td>
    </tr>
   
    </table>
    <form>
    <a href="{{route('students.create' ,$student->id)}}">Create</a>
    <a href="{{route('students.create' ,$student->id)}}" class="previous">&laquo; Previous</a>
<a href="#" class="next">Next &raquo;</a>

<a href="{{route('students.create' ,$student->id)}}" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>
</form> -->

<td class="project-state">
                          <span class="badge badge-success">Success</span>
                      </td>
                   
                    <td class="project-actions text-left">
                         
                    <form id="destroy-form" action="{{route('students.destroy' ,$student->id)}}" method="POST">
  
  @method('delete')
@csrf
                    <!-- <a type="button" class="btn btn-danger" href="{{ route('students.destroy' ,$student->id) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('destroy-form').submit();">
                                        {{ __('Delete') }}
                                    </a>        -->
                                    <button type="submit" class ="btn btn-danger btn-sm" onclick="return confirm('Do U Want Remove')"><i class="fas fa-trash">
                              </i>
                              Delete </button>

                      <a class="btn btn-primary btn-sm" href="{{route('students.show',$student->id)}}">
                              <i class="fas fa-folder">
                              </i>
                             Show
                          </a>
                          <a class="btn btn-info btn-sm" href="{{route('students.edit',$student->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          </form>
                              </td>
                              
    <!-- <input type="submit" value="Delete" class ="btn  btn-danger" onclick="return confirm('Do U Want Remove')"> -->
    
   <!-- <a class ="btn  btn-success"   href="{{route('students.show',$student->id)}}" role="button">Show</a>
   <a class="btn btn-app" href="{{route('students.edit',$student->id)}}">
                  <i class="fas fa-edit" ></i> Edit
                </a> -->
 <!-- <a class ="btn btn-pill btn-primary"   href="{{route('students.edit',$student->id)}}" role="button" > Edit</a></td> -->
                    </tr>

                  </tbody>
                  @endforeach
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          
        
        <!-- /.row -->
        <div class="card-footer">
                
<a href="{{route('students.create')}}" class="btn btn-primary btn-lg">Student create</a></div>
</div>

</div>
</div>              
</body>
</html>