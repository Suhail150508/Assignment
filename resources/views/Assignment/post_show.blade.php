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
    <div class="col-md-4">
        <div >
            <a class="btn btn-primary" style="float: right;margin-top:2rem" href="{{ url('/employee_create') }}">Create New Post</a>
             </div>
    </div>
    <div class="col-md-2"></div>

    <div class="col-md-5 mt-5">
        <form action="/search"  style="display: flex">
            @csrf
            <input class="py-2 form-control" style="width:60%" type="text" name="search" placeholder="Search here...." value="{{ isset($search) ? $search :'' }}"/>
            <button class="btn btn-primary py-2 " type="submit">Submit</button>
        </form>

    </div>
</div>

    <div class="row">
        <div class="col-md-2"></div>
<div class="col-md-8 mt-5" >

    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">User</th>
            <th scope="col">Description</th>
            <th scope="col">Author's Name</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post )

          <tr>
            <th scope="row">{{ $post->id }}</th>
            <th >{{ $post->title }}</th>
            <td>{{ $post->user->name }}</td>
            <td>{{ $post->description}}</td>
            <td>{{ $post->name}}</td>

                <td class="center">

                    <img src="{{asset('/imagesss/'.$post->image ) }}" style="width: 60px; height:60px" alt="img">

                </td>
            <td>
             <a class="btn btn-success" href="{{ url('/employee_edit/'.$post->id) }}">Update</a>
             <a class="btn btn-danger" href="{{ url('/employee_delete/'.$post->id) }}">Delete</a>


            </td>

          </tr>

          @endforeach

        </tbody>
      </table>



<center class="mt-5">
    {{  $posts->withQueryString()->links() }}
</center>

</div>

<div class="col-md-2"></div>




</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


                {{-- toastr message links----- --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js" integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    @if (Session::has('message'))

toastr.options={
     'clossButton':true,
     'progressBar':true,
     'backgroundColor:rek':true,

}
toastr.success("{{ Session::get('message') }}"
// , 'Success! New Student added'
);

       @endif
   </script>

{{-- -----toastr end---- --}}

</body>
</html>
