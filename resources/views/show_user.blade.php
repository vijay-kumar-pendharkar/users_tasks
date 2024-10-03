<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Show User</title>
  </head>
  <body>
    <div class="container">

        <div class="row">
             <div class="col-sm-9 mt-4 d-flex justify-content-end">
                <a href="{{url('task_add')}}" class="btn btn-success">Add Task</a>
            </div>
        </div>
        <div class="row">
          
            <div class="col-sm-9">
                <h1 class="text-center bg-primary text-white mt-3 rounded ">ALL USER</h1>

                <table class="table table-bordered table-info text-center">
                    <thead  class="bg-dark">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                    </tr>
                </thead>

            @foreach( $user as  $users )
                
          
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->mobile}}</td>
                        <td>{{$users->email}}</td>
                    </tr>
            @endforeach

         
                </table>
                <div class="d-flex justify-content-center mt-4">
                   
                    {{ $user->links('pagination::bootstrap-5') }}
                </div>
                
            </div>
          
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>