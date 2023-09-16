

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="h-screen lg:grid-rows-1 lg:grid lg:grid-cols-3">
        <div class="h-full flex flex-col items-center justify-center bg-blue-500 lg:col-span-1 lg:bg-white ">
            <div class="p-2 bg-blue-500 md:hidden">
            </div>
            <div class="bg-white w-full h-full md:w-3/4 md:h-3/4 md:p-10 lg:h-full lg:w-full lg:p-10 overflow-auto	">
                <h2 class="text-2xl font-bold m-2 md:mb-10 lg:mb-2">Create your account:</h2>
                <form class="" action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-2">
                        <div class="m-2">
                            <label class="block text-gray-700 text-sm font-bold" for="username">Username</label>
                            <input class="border rounded w-full py-1 px-2" id="username" type="text" name="username" {{-- required --}}>
                            <p class="text-red-600 text-xs h-[1rem]"> {{-- h-[1rem] prevents the newly created element from pushing other elements at the bottom --}}
                                @error('username')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                        <div class="m-2">
                            <label class="block text-gray-700 text-sm font-bold" for="email">Email</label>
                            <input class="border rounded w-full py-1 px-2" id="email" type="email" name="email" {{-- required --}}>
                            <p class="text-red-600 text-xs h-[1rem]"> {{-- h-[1rem] prevents the newly created element from pushing other elements at the bottom --}}
                                @error('email')
                                {{$message}}
                                @enderror
                            </p>
                        </div>
                    </div>
    
                    <div class="m-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input class="border rounded w-full py-1 px-2" id="password" type="password" name="password" {{-- required --}}>
                        <p class="text-red-600 text-xs h-[1rem]"> {{-- h-[1rem] prevents the newly created element from pushing other elements at the bottom --}}
                            @error('password')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div class="m-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">Confirm Password</label>
                        <input class="border rounded w-full py-1 px-2" id="password_confirmation" type="password" name="password_confirmation" {{-- required --}}>
                    </div>
                    <div class="m-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="full_name">Full Name</label>
                        <input class="border rounded w-full py-1 px-2" id="full_name" type="text" name="full_name" {{-- required --}}>
                        <p class="text-red-600 text-xs h-[1rem]"> {{-- h-[1rem] prevents the newly created element from pushing other elements at the bottom --}}
                            @error('full_name')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div class="m-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="profile_picture">Profile Picture</label>
                        <input class="border rounded w-full py-1 px-2" id="profile_picture" type="file" name="profile_picture" accept="image/*" {{-- required --}}>
                        <p class="text-red-600 text-xs h-[1rem]"> {{-- h-[1rem] prevents the newly created element from pushing other elements at the bottom --}}
                            @error('profile_picture')
                            {{$message}}
                            @enderror
                        </p>
                    </div>
                    <div class="m-2">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="bio">Bio</label>
                        <textarea class="border rounded w-full py-1 px-2" id="bio" name="bio" ></textarea>
                    </div>
                    <div class="text-center">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="hidden lg:block lg:col-span-2 bg-blue-500">
        </div>
    </div>
</body>
</html>