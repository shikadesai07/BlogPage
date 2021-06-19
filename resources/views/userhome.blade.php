<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css">


    <title>Document</title>
    @livewireStyles
    <style>

    </style>
</head>

<body class="bg-red-200">

    <header class=" bg-red-100 text-gray-700 body-font border-b">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
            <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
                <h1 class="text-3xl text-left title-font font-bold  text-black"> Blogify </h1>

                <!-- <a href="/blog" class="mr-5 hover:text-gray-900">Blog</a> -->
                <!-- <a href="/about" class="mr-5 hover:text-gray-900">About</a> -->
            </nav>
            <a class="text-left text-black mr-5 hover:text-gray-900" href="userhome">Home</a>

            <a class="text-black flex order-first lg:order-none lg:w-1/5 title-font font-bold items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
                BLOG
            </a>
            <a href="/logout" id="logout" class="text-black">Logout</a>
            <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
                <!-- <a href="#_" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Login</a> -->
            </div>
        </div>
    </header>











    @livewire('blog-list')
    @livewireScripts
</body>

</html>