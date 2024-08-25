<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="{{asset('index.css')}}">
<title>Create Giftcard</title>
</head>
<body>
<h2>CREATE GIFT CARD SUB CATEGORY IN DATABASE</h2> 
    <form method="POST" action="{{ route('store.subcategory') }}">
    @csrf
<input type="text" name="Subcategoryname" placeholder=" Subcategory">
<input type="text"  name="Rate" placeholder="Rate">
<button type="Submit">Submit</button>
</form>

<br>
<br>
<br>    

</body>
</html>