
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dash board- My Simple To-Do List</title>

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
        <h1>Dashboard</h1>
      </header>

@include('layouts.nav')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@include('layouts.footer')

    
</body>

</html>
