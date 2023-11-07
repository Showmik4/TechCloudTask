

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <title>Add Employee</title>
</head>
<body>
    <div class="container-fluid px-4">
        <div class="card mt-2">
            <div class="card-header">        
                <h3 class="mt-2">Add Employee
               <a href="{{url('/')}}" class="btn btn-primary float-right">Back</a>
            </h3>
        </div>        
        </div>        
        <div class="card-body">        
        <form action="{{route('store_employee')}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- <div class="row mx-5">
          <div class="col-md-12 mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name" required>            
        </div>
          <div class="col-md-12 mb-3">
            <input type="text" name="age" class="form-control" placeholder="age" required>           
          </div>
        
          <div class="col-md-12 mb-3">
            <input type="text " name="address" class="form-control" placeholder="address" required>          
          </div> 
        </div>
            <div class="mb-3 text-center">         
            <input type="submit" class="btn btn-success"/>            
          </div>         --}}

          <div class="container">
            <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control col-sm-8"/>        
            </div>  
            <div class="mb-3 ">
              <label>Age</label>
              <input type="text" name="age" class="form-control col-sm-8"/>                        
            </div>  
            <div class="mb-3 ">
              <label>Address</label>
              <input type="text" name="address" class="form-control col-sm-8"/>
            </div>      
            <div class="mb-3">
           <button type="submit" class="btn btn-primary">Update</button>          
          </div>
        </div>
        </form>  
        </div>
        </div>
</body>
</html>
