

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
    <div class="bg-blue-950 h-screen flex justify-center items-center">
        <div class="max-w-lg h-4/5 mx-auto bg-white rounded p-6 shadow-md">
            <h2 class="text-2xl font-bold m-2">User Registration</h2>
            <form class="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2">
                    <div class="m-2">
                        <label class="block text-gray-700 text-sm font-bold" for="username">Username</label>
                        <input class="border rounded w-full py-2 px-3" id="username" type="text" name="username" required>
                    </div>
                    <div class="m-2">
                        <label class="block text-gray-700 text-sm font-bold" for="email">Email</label>
                        <input class="border rounded w-full py-2 px-3" id="email" type="email" name="email" required>
                    </div>
                </div>

                <div class="m-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                    <input class="border rounded w-full py-2 px-3" id="password" type="password" name="password" required>
                </div>
                <div class="m-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password_confirmation">Confirm Password</label>
                    <input class="border rounded w-full py-2 px-3" id="password_confirmation" type="password" name="password_confirmation" required>
                </div>
                <div class="m-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="full_name">Full Name</label>
                    <input class="border rounded w-full py-2 px-3" id="full_name" type="text" name="full_name" required>
                </div>
                <div class="m-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="profile_picture">Profile Picture</label>
                    <input class="border rounded w-full py-2 px-3" id="profile_picture" type="file" name="profile_picture" accept="image/*" required>
                </div>
                <div class="m-2">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bio">Bio</label>
                    <textarea class="border rounded w-full py-2 px-3" id="bio" name="bio" ></textarea>
                </div>
                <div class="text-center">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>