<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
</head>
<body>
    <form action="{{url('add-data')}}" method="post">
        @csrf 
     
        
        <label for="title">Name</label>
    <input type="text" name="Name" id="title">
    <label for="quantity">Quantity</label>
    <input type="text" name="CandyQuantity" id="quantity">
    <!--Update body-->
    <label for="body">Price</label>
    <input type="text" name="CandyPrice" id="body">
    #<label for="image">Image</label>
    <input type="text" name="image" id="image">
    <button type="submit">add Item</button>
    </form>
</body>
</html>