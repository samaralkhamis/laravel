<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>ADD MOVIE</title>
</head>
<body>
    <h1 style="text-align:center">ADD MOVIE</h1>
    <br>

    <form action="{{url('add')}}" method="post">
        @csrf 

    <label for="title">	Movie</label>
    <input type="text" name="Movie" >
    <label >Movie Name</label>
    <input type="text" name="MovieName">
    <label >Movie Description</label>
    <input type="text" name="MovieDes">
    <label >Movie Gener</label>
    <input type="text" name="MovieGen">

    <button class="btn btn-danger"type="submit">Add Movie</button>
    </form>
</body>
</html>