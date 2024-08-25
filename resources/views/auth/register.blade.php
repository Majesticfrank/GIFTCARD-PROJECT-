{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<style>
    .header-image img{
    width: 16%;
    margin-top:80px ;
    margin-left: 150px;


}
.page-left{
    float: left;
    width: 50%;
    height: 100%;
}
.page-right{
    float: left;
    width: 50%;
    height: 150%;
    background-color: #03924F;
}
.signup-btn{
    width: 17%;
    height: 40px;
    margin-left: 270px;
    margin-top: 50px;
    border-radius: 5px;
    border: 2px solid #03924F;
    background-color: white;

}
.signup-btn a{
    text-decoration: none;
    color: #03924F;
}
.signup-btn:hover{
    background-color: rgba(239, 233, 226, 0.896);
}
.section-1 h2{
    margin-left: 150px;
    margin-top: 30px;
}

.section-1 p{
    margin-left: 150px;
    margin-top: 20px;
}

.section-1 p a{
    color: #03924F;
    font-weight:400 ;

}

.section-2{
    margin-left: 150px;
    margin-top: 40px;
}

.input{
    width: 80%;
    border: none;
    border-bottom:2px solid gray;
    opacity: 0.5;
    outline: none ;
    background: transparent;
    margin-top: 20px;
    padding-left: 60px;
    font-size: 1.0em;
    padding-bottom: 30px;

}

.fa-user, .fa-envelope, .fa-key, .fa-phone, .fa-eye-slash{
    color: #03924F;
    font-size: 1.2em;
}

.fa-eye-slash{
    margin-left: 300px;
}
.section-2 label{
    color: gray;
}
.section-2 p{
    font-size: 0.7em;
}

.section-2 .btn-signup{
    margin-top: 100px;
    background-color: #03924F;
    width: 16%;
    height: 45px;
    margin-left: 390px;
    border: none;
    border-radius: 3px;

}
.section-2 .btn-signup a{
    color: white;
    text-decoration: none;
}
.section-2 .btn-signup:hover{
    background-color:  #066d3d;
}
.section-2 label{
position: relative;
left: 20px;
}

.dash img{
    width: 70%;
}
.dash{
    background-color:#03924F; 
    width:150px;
    height:100%;
}
.dash ul{
    display: block;

}
.dash ul li{
    display: flex;
    margin-top: 100px;
    list-style-type: none;
    justify-content: center;
}
.dash ul li a{
    text-decoration: none;
    color: white;
}
.fa-house{
    font-size: 1.5em;
    color: white;
}

</style>

<body>
    <div class="page-left">
    <header class="header-image">
        <img src="/Images/logo.png" alt="logo">
        <button class="signup-btn"><a href="#">Calculate Rate</a></button>
    </header>

<section class="section-1">
    <h2>Get started</h2>
    <p>All the details provided below will be verified </p>
     <p>Already have an account?<a href="{{ route('login') }}">Login</a></p>  

</section>
<section class="section-2">
    <form action="{{ route('register') }}" method="post">
        @csrf

        <i class="fa-regular fa-user"></i>
    <label for="FirstName">First name *</label> <br>
    <input type="text" name="name" class="input" value="{{ old('name') }}">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <p>Enter names as it appears on your bank account</p>
    <br>

    <i class="fa-regular fa-user"></i>
    <label for="LastName">Last name *</label> <br>
    <input type="text" name="LastName" class="input" value="{{ old('LastName') }}">
    @error('LastName')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <p>Enter names as it appears on your bank account</p>
    <br>

    <i class="fa-solid fa-envelope"></i>
    <label for="email">Email *</label> <br>
    <input type="text" name="email" class="input" value="{{ old('email') }}">
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <p>Enter a valid accessible email address</p>
    <br>

    <i class="fa-solid fa-phone"></i>
    <label for="phone_number">Phone Number *</label> <br>
    <input type="text" name="PhoneNumber" class="input" value="{{ old('PhoneNumber') }}">
    @error('PhoneNumber')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>
    <p>You'll verify your phone number during bank transfer</p>
    <br>

    <i class="fa-solid fa-key"></i>
    <label for="password">Password *</label> <br>
    <input type="password" name="password" class="input">
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>

    <i class="fa-solid fa-key"></i>
    <label for="password_confirmation">Password confirmation *</label> <br>
    <input type="password" name="password_confirmation" class="input">
    @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <br>

    <button type="submit" class="btn-signup" name="Create_customer">Sign Up</button>
</form>

            

    </form>
</section>

</div>

<div class="page-right">

</div>




</body>
</html>

