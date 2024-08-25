{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <link rel="stylesheet" href="Css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
</head>
<body>
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
    <div class="page-left">
        <header class="header-image">
            <img src="/Images/logo.png" alt="logo">
            <button class="signup-btn"><a href="#">Calculate Rate</a></button>
        </header>

    <section class="section-1">
        <h2>Login into your account</h2>

        <p>Don't have an account?<a href="{{ route('register') }}">Create an account</a></p>
           
    </section>
    <section class="section-2">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <i class="fa-solid fa-envelope"></i>
            <label for="Email">Email *</label> <br>
            <input type="text" name="email"  class="input" value="{{ old('email')}}">
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
            <p>Email address is required</p>
            <br>
            <i class="fa-solid fa-key"></i>
            <label for="password">Password * <i class="fa-regular fa-eye-slash"></i></label> <br>
            <input type="Password" name="password"   class="input" value="{{old('password')}}">
            @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <br>
                <button type="submit" class="btn-signup">Sign in</button>
                       
        </form>
         {{-- <a href="{{route('SendEmail')}}">Forgot password?</a>   --}}
     </section>

    </div>

    <div class="page-right">

    </div>


</body>
</html> -
