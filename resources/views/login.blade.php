<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css">
</head>

<body>
<div class = "min h screen  text-gray-800 antialiased min-h-screen  py-10 flex flex-col justify-center sm:py-12">
<div class= "relative py-3 sm:max-w-xl sm:mx-auto">

    <form  class = "mt-4 bg-white shadow-md rounded -lg" action="login" method="post">
    <div class= "h-2 bg-yellow-400 rounded-t-md"></div>
    <div class = "px-8 py-6">
    <x-header data="Login"/>
    <div class= "h-2 bg-yellow-400 rounded-t-md"></div>
    <div class = "px-8 py-6">
        @csrf
        <input name="username" type="text" placeholder="Username" class="bg-gray-100 border focus:bg-white outline-none focus:border-3 focus:border-yellow-300 p-2 rounded"></br>
        <span class="text-sm text-red-500">@error('username'){{$message}}@enderror</span></br>
        <input name="password" type="password" placeholder="Password" class="bg-gray-100 border focus:bg-white outline-none focus:border-3 focus:border-yellow-300 p-2 rounded"></br>
        <span class="text-sm text-red-500">@error('password'){{$message}}@enderror</span></br>
        <button type="submit" class = "font-bold text-gray-900 mt-4 bg-yellow-500 text-black py-2 px-6 rounded-md hover:bg-indigo-600">Sign In</button>
        
        
        <div class="my-3">
        <span>Not a member yet? </span>
        <a href="registration" class="text-blue-500 hover:text-blue-700">Sign up</a>
     </div>
    
    </form>
  
    </div>
    </div>
    </div>
    </div>


</body>

</html>