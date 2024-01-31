
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-200 text-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-xl font-semibold">Your E-commerce</a>
            <div class="flex space-x-4">
                <a href="/" class="hover:text-gray-500">Home</a>
                <a href="/shop" class="hover:text-gray-500">Shop</a>
                <a href="#" class="hover:text-gray-500">About</a>
                <a href="#" class="hover:text-gray-500">Contact</a>
                <a href="register" class="hover:text-gray-500  mx-6">Sign Up</a>
            </div>
        </div>
    </nav>

    <section class="container mx-auto my-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <!-- Product Card 1 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://placekitten.com/300/200" alt="Product Image" class="w-full h-32 object-cover mb-4">
                <h2 class="text-lg font-semibold">Product Name 1</h2>
                <p class="text-gray-600">$19.99</p>
                <button class="mt-4 bg-gray-800 text-white py-2 px-4 rounded-full hover:bg-gray-700">Add to Cart</button>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://placekitten.com/300/200" alt="Product Image" class="w-full h-32 object-cover mb-4">
                <h2 class="text-lg font-semibold">Product Name 2</h2>
                <p class="text-gray-600">$29.99</p>
                <button class="mt-4 bg-gray-800 text-white py-2 px-4 rounded-full hover:bg-gray-700">Add to Cart</button>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white p-4 rounded-lg shadow">
                <img src="https://placekitten.com/300/200" alt="Product Image" class="w-full h-32 object-cover mb-4">
                <h2 class="text-lg font-semibold">Product Name 3</h2>
                <p class="text-gray-600">$39.99</p>
                <button class="mt-4 bg-gray-800 text-white py-2 px-4 rounded-full hover:bg-gray-700">Add to Cart</button>
            </div>


        </div>
    </section>

</body>

</html>
