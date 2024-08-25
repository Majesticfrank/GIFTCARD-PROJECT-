{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
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
    <title>Dashboard</title>
    <link rel="stylesheet" href="sidebar.css">
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
    
<div class="content">
    <h4>Welcome!, {{ Auth::user()->name }} {{ Auth::user()->LastName }}</h4>
    <p>Available Balance</p>
    <h2>₦ 0</h2>
    <button class="withdraw">Withdraw</button>

    <p class="pend">pending action</p>
    
    <button class="v-Email" onclick="verifyEmail()" id="v-Email">
        <i class="fa fa-thumbtack"></i>Verify Email
    </button>
    <button class="pin" onclick="createpin()" id="pin">
        <i class="fa fa-thumbtack"></i>Create Pin
    </button>

        
    <div class="pin-box" id="pin-box">
        <h3>Create New Transaction PIN</h3>
        <p>You'll need this pin to withdraw and perform transaction</p>
        <button class="close-button" onclick="closeAlert()" id="close-button">
            <i class="fa fa-times"></i>
        </button>
        <input type="text" maxlength="1" oninput="moveFocus(this, 'next')" />
        <input type="text" maxlength="1" oninput="moveFocus(this, 'next')" />
        <input type="text" maxlength="1" oninput="moveFocus(this, 'next')" />
        <input type="text" maxlength="1" oninput="moveFocus(this, 'prev')" />

        <button class="complete">Complete</button>

    </div>
    <div class="pin-box2" id="pin-box2">
        <h3>Verify Account</h3>
        <p>Enter the 4 digit code sent to your Email</p>
        <button class="close-button2" onclick="closeAlert()" id="close-button">
            <i class="fa fa-times"></i>
        </button>
        <input type="text" maxlength="1" oninput="moveFocus(this, 'next')" />
        <input type="text" maxlength="1" oninput="moveFocus(this, 'next')" />
        <input type="text" maxlength="1" oninput="moveFocus(this, 'next')" />
        <input type="text" maxlength="1" oninput="moveFocus(this, 'prev')" />

        <button class="complete">Complete</button>

    </div>
    <hr>
    <p>Get started with MAJESTIC</p>

    <button class="sell-giftcard" id="sell-giftcard">
        <a href="{{route('user.giftcardview')}}">
        <i class="fas fa-tag sell-icon"></i> Sell Giftcard >
    </a>
    </button>
    <button class="hottest-rate"  id="hottest-rate">
        <i class="fas fa-fire fire-icon"></i>Hottest Rate >
    </button>
</div>


</div>  

<script>
    function createpin(){
       var x=document.getElementById('pin');
       var  y=document.getElementById('pin-box');
       y.style.visibility='visible';
    }

    function closeAlert(){
            let x= document.getElementById('pin-box');
            let z= document.getElementById('close-button');
             x.style.visibility="hidden";
        }
        function verifyEmail(){
       var d=document.getElementById('v-Email');
       var  k=document.getElementById('pin-box2');
       k.style.visibility='visible';
    }
    function closeAlert(){
            let x= document.getElementById('pin-box2');
            let z= document.getElementById('close-button2');
             x.style.visibility="hidden";
    }





function moveFocus(current, direction) {
            if (current.value.length === 1 && direction === 'next') {
                const next = current.nextElementSibling;
                if (next) {
                    next.focus();
                }
            } else if (current.value.length === 0 && direction === 'prev') {
                const prev = current.previousElementSibling;
                if (prev) {
                    prev.focus();
                }
            }
        }

        // Event listeners to handle backspace and moving focus back
        document.querySelectorAll('.pin-box input').forEach((input, index, inputs) => {
            input.addEventListener('keydown', (event) => {
                if (event.key === 'Backspace' && input.value.length === 0 && index > 0) {
                    inputs[index - 1].focus();
                }
            });
        });

       
</script>
</body>
</html>
