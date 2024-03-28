
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Only Service</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
  
  <form action='{{route('service.create')}}' method="POST" class="row px-5 mx-5 my-4">
    @csrf

    @if(session()->has('message'))
      <div class="alert alert-success text-center">
          {{ session()->get('message') }}
      </div>
    @endif

    @if(count($errors) > 0)
        @foreach( $errors->all() as $message )
            <div class="alert alert-danger display-hide">
            <span>{{ $message }}</span>
            </div>
        @endforeach
    @endif
    
    <h2 class="py-4 text-center text-success">Only service for {{$service->name}}</h2>
  
    <div data-mdb-input-init class="form-outline mb-4">
      <input type="text" class="form-control" name="name"/>
      <label class="form-label" for="form3Example3">Name</label>
    </div>
  
    <div data-mdb-input-init class="form-outline mb-4">
      <textarea type="text" class="form-control" name="description" row="5" column="50"></textarea>
      <label class="form-label" for="form3Example4">Description</label>
    </div>
  

    <button  class="btn btn-success btn-block mb-4">Add Service</button>
  
  </form>
</body>
</html>
