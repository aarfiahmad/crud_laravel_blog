<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container col-sm-12 mt-3">
    <div >
    <h1>Edit Post</h1>
    <form action="/edit-post/{{$post->id}}" method="POST" class="bg-primary text-white p-4">
      @csrf
      @method('PUT')
      <div class=" form-group text-info">
        <label for="name-f">Title </label>
      <input type="text" name="title" value="{{$post->title}}" class="form-control">
      </div>
      <br>
      <div class=" form-group col-sm-8 text-info">
        <label for="name-f">Body   </label>
      <textarea name="body" class="form-control m-4 ">{{$post->body}}</textarea>
      </div>
      
  <br>
  <div class="col-sm-12 form-group mb-0">
    <button class="btn btn-info float-right">Save Changes </button>
  </div>
    </form>
    </form>
    </div>
  </div>
  </div>
  


  

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>