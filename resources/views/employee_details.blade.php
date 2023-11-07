<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <title>Employee Details</title>
</head>
<body>
    <div class="container-fluid px-4">
        <div class="card mt-4">
            <div class="card-header">        
                <h3 class="mt-2">Employee Details         
                <a href="{{route('add_employee')}}" class="btn btn-primary float-right">Add</a>
                </h3>
            </div>        
        </div>
        
        <div class="card-body">        
          <div class="container">           
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Address</th>  
                        <th>Action</th>                  
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
          </div>
        
        </div>
        </div>      
      
        <script type="text/javascript">
          $(function () {
            
            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('/') }}",
                columns: [
                    {data: 'id', name: 'id'},                   
                    {data: 'name', name: 'name'},
                    {data: 'age', name: 'age'},               
                    {data: 'address', name: 'address'},  
                    {data: 'action', name: 'action', orderable: false, searchable: false},              
                ]
            });
            
          });
        </script>
</body>
</html>