<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogify</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
</head>

<body class="bg-gradient-to-l from-green-300 to-blue-200 relative">
    <h1 class="text-center text-6xl italic my-4 font-Apple Color Emoji ... text-blue-500 font-bold">Blogify</h1>
    <a href="/logout" class="absolute top-3 right-5 p-2 text-lg border border-3 border-gray-500 rounded hover:bg-gray-500 hover:text-white">Logout</a>    
    
    <div class="flex relative top-8">
        <div class="border border-solid border-gray-300 bg-gray-100 h-screen text-2xl flex flex-col w-1/6 rounded shadow">
            <p class="w-full p-3 text-center bg-gray-700 rounded-t text-white">{{session()->get('user')}}</p>
            <a href="adminhome" class=" w-full p-3 text-center text-base hover:bg-gray-700 hover:text-white">My Blogs</a><br>
            <a href="draft-list" class="w-full p-3 text-center text-base hover:bg-gray-700 hover:text-white">Drafts</a>
        </div>

        <div class="bg-gray-100 w-4/6 ml-24 rounded shadow">
            @livewire('add-post')
            
            @livewire('blog-list')
            
        </div>
    </div>
    @livewireScripts
</body>

</html>

<script>
    $(document).ready(function(){
        $(".add-post-container").hide();
    })

    $(document.body).on('click', '#new-post-btn', function(){
        $(".add-post-container").show();
    })

    $(document.body).on('click', '#cancel-btn', function(){
        $(".add-post-container").hide();
    })
</script>