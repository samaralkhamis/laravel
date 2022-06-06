<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="{{url('update-data/id/'.$update->id)}}" method="post">
    @csrf
    @method('PUT')
    <!--Update title-->
    <label for="title">Name</label>
    <input type="text" name="Name" id="title" value="{{$update->CandyName}}">
    <label for="quantity">Quantity</label>
    <input type="text" name="CandyPrice" id="quantity" value="{{$update->CandyPrice}}">
    <!--Update body-->
    <label for="body">Price</label>
    <input type="text" name="CandyQuantity" id="body" value="{{$update->CandyQuantity}}">
    <!--update Button-->
    <button type="submit">Update</button>
    </form>
</body>
</html>