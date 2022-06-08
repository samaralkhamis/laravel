<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Update</title>
</head>
<body>
    <form action="{{url('/update/id/'.$update->id)}}" method="post">
    @csrf
    @method('PUT')

    <label for="title">	Movie</label>
    <input type="text" name="Movie" value="{{ $update->Movie }}">
    <label >Movie Name</label>
    <input type="text" name="MovieName" value="{{ $update->MovieName }}">
    <label >Movie Description</label>
    <input type="text" name="MovieDes" value="{{ $update->MovieDes }}">
    <label >Movie Gener</label>
    <input type="text" name="MovieGen" value="{{ $update->MovieGen }}">
    <!--update Button-->
    <button class="btn btn-danger" type="submit">Update</button>
    </form>
</body>
</html>