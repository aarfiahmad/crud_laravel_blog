<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
   

 @auth
  <div class="container mt-0 bg-primary p-4">
 <h3 class="text-info">Congrats you are logged In.</h3>
 <form action="/logout" method="POST">
   @csrf
   <div class="col-sm-12 form-group mb-0">
    <button class="btn btn-info float-right"><b> Logout</b></button>
  </div>
</div>
  
 </form>

 <div class="container mt-3">
  
  <form action="/create-post" method="POST" class="bg-primary text-white p-4">
    <h2 class="text-center text-info">Create new Post..</h2>
    @csrf
          
<div class="col-sm-6 form-group ">
  <label for="name-f">Enter title </label>
<input type="text" class="form-control" name="title"  placeholder="Post title " required>
</div>

          
<div class="col-sm-12 form-group text-info">
  <label for="name-f">Enter text  </label>
<textarea type="text" class="form-control" name="body"  placeholder="Enter content .." > </textarea>
</div>

<br>
<div class="col-sm-12 form-group mb-0">
  <button class="btn btn-info float-right">Post Item</button>
</div>
  </form>
</div>


   
                  
          {{-- Edit/Delet  --}}

          <div class="container mt-3 bg-info text-primary ">

            <h1 class=" text-white text-center p-4">All Posts</h1>
          </div>
            @foreach($posts as $post)
            <div class="container mt-2 text-white bg-primary">
              <h3 class="text-info">{{$post['title']}} by {{$post->user->name}}</h3>
             <p> <b> {{$post['body']}} </b> </p>
              <a href="/edit-post/{{$post->id}}" class="text-danger bg-white p-2">Edit</a>
            </div>
              <form action="/delete-post/{{$post->id}}" method="POST">
                <br>
                @csrf
                @method('DELETE')
                <div class="col-sm-8 form-group mb-2">
                  <button class="btn btn-info float-left">Delete</button>
                </div>
              </form>
               <br>
            </div>
            @endforeach
          </div>


     @else 

     <div class="container mt-3">
      <form action="/register" method="POST" class="bg-primary text-white p-4">
        @csrf
       
      <div class="col-sm-12 mx-t3 mb-4">
        <h2 class="text-center text-info">Registration ..</h2>
      </div>
      <div class="col-sm-6 form-group text-info">
      <label for="name-f">Enter Name</label>
    <input type="text" class="form-control" name="name"  placeholder="Enter your name" required>
  </div>

  <div class="col-sm-6 form-group text-info">
    <label for="name-f">Enter email</label>
  <input type="text" class="form-control" name="email"  placeholder="Enter  email." required>
</div>

<div class="col-sm-6 form-group  text-info">
  <label for="name-f">Enter password</label>
<input type="password" class="form-control" name="password"  placeholder="Enter your password" required>
</div>
  
  <br>
<div class="col-sm-12 form-group mb-0">
  <button class="btn btn-info float-right">Register</button>
</div>



      </form>
     </div>
    </div>



    <div class="container mt-3">
     
      <form action="/login" method="POST" class="bg-primary text-white p-4">
        <h2 class="text-center text-info">Login ..</h2>
        @csrf

         
<div class="col-sm-6 form-group ">
  <label for="name-f">Enter name</label>
<input type="text" class="form-control" name="loginname"  placeholder="Enter your name" required>
</div>

   
<div class="col-sm-6 form-group text-info ">
  <label for="name-f">Enter password</label>
<input type="password" class="form-control" name="loginpassword"  placeholder="Enter your password" required>
</div>

       
<br>
<div class="col-sm-12 form-group mb-0">
  <button class="btn btn-info float-right">Login</button>
</div>
      </form>
    </div>
 @endauth
      
 
  




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</body>
</html>
