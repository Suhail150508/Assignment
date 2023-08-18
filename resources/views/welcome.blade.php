<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment</title>

    <style>
body{

    background-color: gray;
}
*{
    text-decoration: none;
    list-style-type: none;
}

.create {
    text-align: center;
    font-size: 2rem;
    background-color: darkcyan;
    padding: 4rem;
}
.create a{
    color: white;
    background-color: mediumblue;
    padding: 3rem
}

    </style>
</head>
<body >

<div>
  <div class="create">
    <a href="{{ url('/employee_show') }}">Task-5</a>
  </div>
<div class="create">
    <a href="#">Task-1</a>
</div>
   <div class="create">
    <a href="#">Task-3</a>
</div>
</div>
</body>
</html>
