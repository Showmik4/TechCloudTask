
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <title>Edit Employee</title>
</head>
<body>
  
<div class="container-fluid px-4">
  <div class="card mt-2">
      <div class="card-header">
          <h3 class="mt-4">Edit Employee
            <a href="{{url('/')}}" class="btn btn-primary float-right">Back</a>
          </h3>
          
      </div>
  
  </div>
  
  <div class="card-body">
    <form action="{{url('update_emplyee/'.$data->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')
              <div class="container">
              <div class="mb-3">
              <label>Name</label>
              <input type="text" name="name" class="form-control col-md-8" value="{{$data->name}}"/>        
              </div>  
              <div class="mb-3 ">
                <label>Age</label>
                <input type="text" name="age" class="form-control col-md-8" value="{{$data->age}}"/>                        
              </div>  
              <div class="mb-3 ">
                <label>Address</label>
                <input type="text" name="address" class="form-control col-md-8" value="{{$data->address}}"/>
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


