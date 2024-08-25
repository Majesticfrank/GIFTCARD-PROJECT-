<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>SELL GIFT CARDS</title>
</head>
<body>
    
    <div class="products">
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a href="{{route('admin.dashboard')}}">Overview</a></li>
            <li><a href="{{route('admin.giftcardmanagement')}}">GiftCard Management</a></li>
        
        </ul>
        <form method="POST" action="{{ route('logout.Admin') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </div>

    <h3><a href="{{route('product.create')}}">Click Here To Add Giftcard</a></h3>
    <h3><a href="{{route('create.subcategory')}}">Click Here Add To Sub category Giftcard</a></h3>
    <div class="gallery">
       
        @foreach ($products as $product)
            <div class="gallery-item">
                <a href="{{ route('show.subdetails', $product->id) }}">
                    <img src="{{ asset('images/' . ($product->photo ?? 'default.jpg')) }}" alt="{{ $product->productname }}">
                    <P>{{$product->productname}}</P>
                </a>
                <form action="{{ route('product.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        @endforeach
    </div> 
</div>
    
    
    <style>

    .gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Space between images */
    margin-top: 50px;
    float:left;
    width: 76%;
    margin-left: 100px
}

.gallery-item {
    border: 2px solid #ddd; /* Border around each image */
    padding: 5px; /* Space between the border and the image */
    box-shadow: 2px 2px 5px rgba(0,0,0,0.1); /* Optional: Shadow for better visibility */
    width: 150px; /* Set a fixed width for each image */
    height: auto; /* Maintain aspect ratio */
    
}

.gallery-item img {
    width: 100%; /* Make image fit the container */
    height: auto; /* Maintain aspect ratio */
    display: block;
}

.gallery-item a {
    display: block;
    text-decoration: none; /* Remove underline from links */
}


*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
.sidebar {
    width: 250px;
    background-color: rgb(12,43,27);
    color: white;
    height: 100vh;
    padding: 15px;
    float: left;


}

.sidebar h2 {
    text-align: center;
    margin-bottom: 30px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin: 15px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 5px;
}

.sidebar ul li a:hover {
    background-color: #555;
}

.content {
    flex-grow: 1;
    padding: 20px;
}

.content section {
    display: none;
}

.content section:target {
    display: block;
}

.content h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.content p {
    font-size: 18px;
}

/* Gifcard Management styling */


.section{
     margin-left: 300px;
     position: absolute;
     top: 50px;
}



    </style>

</body>
</html>