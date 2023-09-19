<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('favicon-32x32.png') }}">

</head>
<body>
    <nav class="bg-sky-950 p-4">
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <!-- Brand Logo -->
                <a href="/" class="text-white text-2xl font-semibold">Blog Site</a>
                
                <!-- Navigation Links -->
                <ul class="flex space-x-4">
                    <li><a href="/" class="text-white hover:text-gray-300">Home</a></li>
                    <li><a href="/about" class="text-white hover:text-gray-300">About</a></li>
                    <li><a href="/contact" class="text-white hover:text-gray-300">Contact</a></li>
                    @auth
                        <!-- Display content for authenticated users -->
                        
                        <li><a href="/profile/{{Auth::user()->username}}" class="text-white hover:text-gray-300"><p>{{ Auth::user()->full_name }}</p></a></li>

                    @else
                        <!-- Display content for guest users -->
                        <li><a href="/login" class="text-white hover:text-gray-300">Login</a></li>
                    @endauth
                </ul>
            </div>

        </div>
    </nav>
    <div class="container mx-auto">
        {{$slot}}
    </div>
</body>
</html>