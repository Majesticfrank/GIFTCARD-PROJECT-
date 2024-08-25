<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('sidebar.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
   <div class="main">
    <div class="nav">
        <ul>
            <li><a href="Home.html"><i class="fa fa-home"></i>Home</a></li>
            <li><a href="wallet.html"><i class="fa fa-wallet"></i>Wallet</a></li>
            <li><a href="History.html"><i class="fa fa-history"></i>History</a></li>
            <li><a href="Rate.html"><i class="fa fa-calculator"></i>Rate Calculator</a></li>
            <li><a href="Account.html"><i class="fa fa-user"></i>Account</a></li>
        </ul>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <i class="fa-solid fa-power-off"></i><button type="submit" class="btn-secondary">log out</button>
        </form>
        
    </div>
   </div>


   <div class="gallery">
    @foreach ($products as $product)
        <div class="gallery-item">
            <a href="{{ route('user.subcategory', $product->id) }}">
                <img src="{{ asset('images/' . ($product->photo ?? 'default.jpg')) }}" alt="{{ $product->productname }}">
                <P>{{$product->productname}}</P>
            </a>
        </div>
    @endforeach
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


    </style>



</body>
    </html>