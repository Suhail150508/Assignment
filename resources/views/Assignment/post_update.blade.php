<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

             {{-- toastr info here --}}
             <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
             <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>
<body>

    <div class="row">
      <div class="col-md-3"></div>

     <div class="col-md-6 mt-5" >
        <h2 class="m-4">Update Employee</h2>
        <form action="{{ url('/employee_update/'.$posts->id) }}" method="post" enctype="multipart/form-data">
            @csrf
         @method('PUT')

         <div class="form-group">
            <label for="name"></label>
            <input type="text" class="form-control" name="name"  placeholder="Author's Name" value="{{ $posts->name }}">
         </div>
         @error('name')
         <div class="error" style="color:red">{{ $message }}</div>
          @enderror


         <div class="form-group">
           <label for="title"></label>
           <input type="text" class="form-control" name="title"  placeholder="Inter Your Name" value="{{ $posts->title }}">
         </div>
         @error('title')
         <div class="error" style="color:red">{{ $message }}</div>
          @enderror


          <div class="form-group">
            <label for="name">User</label>
            <div class="form-control">
                <select name="user" >
                <option> Select User</option>
                @foreach ($users as $user )

                <option value="{{$user->id  }}">{{$user->name }}</option>

                @endforeach
                </select>

                @error('user')
                <div class="error" style="color:red">{{ $message }}</div>
                 @enderror
            </div>
          </div>


         <div class="form-group">
            <label for="name">Description</label>
            <input type="text" class="form-control" name="description"  placeholder="Description" value="{{ $posts->description }}">
         </div>
         @error('description')
         <div class="error" style="color:red">{{ $message }}</div>
          @enderror




          <div class="form-group ">
            <label for="image">image</label>
            <input type="file" class="form-control" name="image" placeholder="image">
            <img src="{{asset('/imagesss/'.$posts->image ) }}" style="width: 60px; height:60px" alt="img">
          </div>
          @error('image')
          <div class="error" style="color:red">{{ $message }}</div>
           @enderror





         <button type="submit" class="btn btn-primary mt-4">Update</button>
         </form>
        </div>

       <div class="col-md-3"></div>
    </div>

       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</body>
</html>
