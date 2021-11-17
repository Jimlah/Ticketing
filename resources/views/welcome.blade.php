<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    @livewireStyles
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>

    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="antialiased text-gray-100 bg-gray-900">
    <div class="flex flex-col w-full h-screen">
        <nav class="flex items-center justify-between px-10 py-5 sm:px-20">
            <h1 class="text-2xl font-bold">ITX Telecoms</h1>
            <div class="flex items-center space-x-5 text-sm font-semibold">
                <a href="{{ route('login') }}" class="py-1 hover:border-b"> Login </a>
                <a href="{{ route('register') }}" class="py-1 hover:border-b"> Register </a>
            </div>
        </nav>
        <div
            class="grid items-start w-full h-full grid-cols-1 gap-10 px-10 pb-10 sm:px-20 sm:grid-cols-2 md:gap-20 md:pb-20">
            <div class="hidden w-full grid-cols-3 col-span-1 gap-2 py-20 sm:grid">
                <div class="flex flex-col justify-start flex-1 overflow-hidden shadow-sm rounded-xl">
                    <div class="w-full h-40 bg-center bg-cover"
                        style="background-image: url('https://media.istockphoto.com/photos/african-woman-with-her-eyes-closed-picture-id1297067656?k=20&m=1297067656&s=612x612&w=0&h=lv2HkL_CjK3ebIcnzjv7lI1sbR3024HavHTNYoBmhdw=')">

                    </div>
                    <div
                        class="flex flex-col items-center justify-center h-16 space-y-1 text-sm font-bold text-gray-900 bg-gray-200 text-wider">
                        <span class="text-sm font-bold text-gray-900 text-wider">
                            Allen Smith
                        </span>
                        <span class="font-normal text-gray-500">
                            Support
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-start justify-center w-full h-full col-span-1 space-y-8">
                <h2 class="font-bold tracking-tight text-7xl">
                    We listen to your needs and provide the best solution for you.
                </h2>
                <p class="text-sm font-normal tracking-wider">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum euismod, nisl sit amet consectetur consectetur,
                    nisi erat euismod nunc, eget consectetur nunc nisi eget
                    consectetur nunc.
                </p>
            </div>
        </div>
    </div>
</body>

</html>
