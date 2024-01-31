<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="flex">
        <div class="w-56 bg-gray-100 shadow-lg h-screen">

            <img src="https://media.istockphoto.com/id/1289936905/vector/eagle-simple-icon-flat-style-element-for-graphic-design-vector-eps10-illustration.jpg?s=612x612&w=0&k=20&c=Z4Abn-kgb6BIPfjC4isvNIPPC7iTcqSmgMoPEoYKAZQ="
                class="w-8/12 mx-auto mt-5" alt="">

            <div class="mt-5">
                <a href="{{route('dashboard')}}" class="block px-2 py-3 border-l-4 border-blue-600 m-2 hover:bg-gray-300">Dashboard</a>
                <a href="" class="block px-2 py-3 border-l-4 border-blue-600 m-2 hover:bg-gray-300">Products</a>
                <a href="{{route('category.index')}}" class="block px-2 py-3 border-l-4 border-blue-600 m-2 hover:bg-gray-300">category</a>
                <a href="" class="block px-2 py-3 border-l-4 border-blue-600 m-2 hover:bg-gray-300">Users</a>
                <a href="" class="block px-2 py-3 border-l-4 border-blue-600 m-2 hover:bg-gray-300">Logout</a>
            </div>
        </div>
        <div class="p-4 flex-1">
            @yield('content')
        </div>
    </div>
</body>

</html>