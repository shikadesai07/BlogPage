<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
    <link rel="stylesheet" type="text/css">
</head>

<body>
        <div class= "relative py-3 sm:max-w-xl sm:mx-auto">
 
 
    <form class = "mt-4 bg-white shadow-md rounded -lg" action="registration" method="post">
    <div class= "h-2 bg-indigo-400 rounded-t-md"></div>
    <div class = "px-8 py-6">
    <x-header data="Signup"/>
    <div class= "h-2 bg-indigo-400 rounded-t-md"></div>
    <div class = "px-8 py-6">
   
        @csrf
        <input type="text" name="firstname" placeholder="First Name" class="bg-gray-100 border focus:bg-white outline-none focus:border-3 focus:border-indigo-400 p-2 rounded">
        <input type="text" name="lastname" placeholder="Last Name" class="bg-gray-100 border focus:bg-white outline-none focus:border-3 focus:border-indigo-400 p-2 rounded"></br>
        <span>@error('firstname'){{$message}}@enderror</span>
        <span>@error('lastname'){{$message}}@enderror</span></br>
        <input type="text" name="username" placeholder="Username" class="w-full bg-gray-100 border focus:bg-white outline-none focus:border-3 focus:border-indigo-400 p-2 rounded"></br>
        <span>@error('username'){{$message}}@enderror</span></br>
        <input type="password" name="password" placeholder="Password" class="w-full bg-gray-100 border focus:bg-white outline-none focus:border-3 focus:border-indigo-400 p-2 rounded"></br>
        <span>@error('password'){{$message}}@enderror</span></br>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full bg-gray-100 border focus:bg-white outline-none focus:border-3 focus:border-indigo-400 p-2 rounded"></br>
        <button type="submit" class = "font-bold text-gray-900 mt-4 bg-indig-500 text-black py-2 px-6 rounded-md hover:bg-indigo-600">Sign Up</button>
    </form>

    <div>
        <span>Already a user? </span>
        <a href="login" class="text-blue-500 hover:text-blue-700">Sign in</a>
    </div>
    
    </div>

