
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login - My Simple To-Do List</title>

    <style>

        body 
        {
            background-color: #A6FFF2;
        }

        /* Header styles */
        header {
            background-color: #00E0FF;
            color: #010101;
            padding: 20px;
            text-align: center;
        }


        /* Navigation styles */
        nav {
            background-color: #74F9FF;
            padding: 10px 0;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            color: #000000;
            text-decoration: none;
            font-weight: bold;
        }



        /* Footer styles */
        footer {
            background-color: #E8FFE8;
            color: #000000;
            text-align: center;
            padding: 1px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            }




    </style>
    
</head>

<body>
    
      <header>
        <h1>Login</h1>
      </header>

@include('layouts.nav')

<h2 style="text-align:center;">To enjoy the facilities of Tasks , please login first in to your account or register at our website </h2>

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}"  >
        @csrf

        <!-- Email Address -->
        <div >
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
        <div class="block mt-4"  >
            <label for="remember_me" class="inline-flex items-center" >
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4" >
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
@include('layouts.footer')

    
</body>

</html>
