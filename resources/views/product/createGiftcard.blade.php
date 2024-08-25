<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('index.css')}}">
    <title>Create Giftcard</title>
</head>
<body>
    <h2>CREATE GIFT CARD IN DATABASE</h2> 
        <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf
<input type="text" name="productname" placeholder=" Enter Gift card Name">
<input type="text" name="description" placeholder="Description">
<input name="photo" type="file" id="photo">
<button type="Submit">Submit</button>
    </form>

<br>
<br>
<br>
</body>
</html>