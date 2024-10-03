<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add_task</title>
  </head>
  <body>
  <div class="container">

    <div class="row">

           
        <div class="col-sm-6 mt-4 d-flex justify-content-end">
            <a href="{{url('show_user_task')}}" class="btn btn-success">Show User & Task</a>
        </div>
    </div>

     <div class="row">
        <div class="col-sm-6 mt-4 rounded bg-info">
            <h1 class="text-center bg-dark text-white mt-3 rounded ">ADD USER-TASK</h1>
     
            @if(session()->has('status'))
                 <div class="alert alert-success">
                    {{session('status')}}
                 </div>
            @endif

      
            
            <form action="{{url('save_task')}}" method="post" >
                @csrf

                <div class="mb-2">
                        <label for=""class="mb-1">Select User :</label>
                        <select class="form-select" name="user_id" aria-label="Default select example">
                            <option selected>Select User</option>
                           
                       
                            @foreach ($user as $user )
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                             
                
                        </select>
                </div> 

                <div class="mb-2">
                   <label for="" class="form-label">Task-Title</label>
                   <input type="text" name="title" class="form-control" placeholder="Title">
                </div>

                <div class="mb-2">
                    <label for="" class="form-label">Task-Description</label>
                    <input type="text" name="description" class="form-control" placeholder="Description">
                </div>

                <div class="mb-3">
                    <label for=""class="mb-1">Task-Type :</label>
                    <select class="form-select" name=task_type aria-label="Default select example">
                        <option selected>Select task-type</option>
                        <option value="pending">Pending</option>
                        <option value="done">Done</option>
                     </select>
                </div> 
                
                <div class="mb-3">
                    <input  type="submit" value="Save Task" class="btn btn-primary">
                </div> 

            </form>
        
          
        </div>
     </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>