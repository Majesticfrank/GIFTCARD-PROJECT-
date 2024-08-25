{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   <h4>Admin Dashboard Page</h4>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout.Admin') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
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
    </div>


    <style>
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
