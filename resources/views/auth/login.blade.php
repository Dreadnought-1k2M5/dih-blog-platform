<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    @vite('resources/css/app.css')

</head>
<body>
    <div class="h-screen grid grid-cols-3">
        <div class="col-span-1 bg-blue-500 h-screen">

        </div>
        <div class="col-span-2 p-10 flex items-center justify-center">
            <div class="w-3/5 p-7">
                <h2 class="text-2xl font-bold uppercase">Login to Your Account</h2>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    @if($errors->has('invalid'))
                        <p class="text-red-500 text-xs italic h-[1rem]">{{ $errors->first('invalid') }}</p>
                    @endif 
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                            Username
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="username" name="username" type="text" placeholder="Username">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                            Password
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="password" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="flex items-center justify-between">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Sign In
                        </button>
                        <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800"
                           href="/forgot-password">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>

        </div>

    </div>

    
</body>
</html>