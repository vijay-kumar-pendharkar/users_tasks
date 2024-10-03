<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add User</title>
  </head>
  <body>

    <div class="container">
        <div class="row">

           
            <div class="col-sm-5 mt-4 d-flex justify-content-end">
                <a href="{{url('show_user')}}" class="btn btn-success">Show User</a>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-5 mt-4 rounded shadow bg-info ">
                
                <h1 class="text-center bg-dark text-white mt-3 rounded ">ADD USER</h1>

                @if(session()->has('status'))
                 <div class="alert alert-success">
                    {{session('status')}}
                 </div>
                 @endif
            

                <form action="{{url('user_save')}}"  method="post">
                        @csrf

                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="User Name">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Mobile</label>
                                <input type="number" class="form-control" name="mobile" placeholder="User Mobile Number">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" placeholder="User Email">
                            </div>
                            <div class="mb-3">
                                
                                <input type="submit" value="Add User" class="btn btn-primary">
                            </div>
                    </form>

         
          </div>
        </div>
  </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>