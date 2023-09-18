<x-layout>
    
        @auth
        <!-- Display content for authenticated users -->
        <p>PROFILE: Welcome, {{ /* Auth::user()->full_name */ $username }}!</p>
    @else
        <!-- Display content for guest users -->
        <p>Please log in to access your dashboard.</p>
    @endauth
    <form method="POST" action="/logout">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <div class="container mx-auto mt-4 p-4">
        <!-- Blog Post List -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Blog Posts</h2>
            <ul class="space-y-4">
                <!-- Sample Blog Post Item -->
                <li>
                    <div class="bg-white shadow-md p-4 rounded-lg">
                        <h3 class="text-lg font-semibold">Blog Post Title</h3>
                        <p class="text-gray-500">Posted on September 17, 2023</p>
                        <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla...</p>
                        <div class="mt-4">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded-md mr-2">Edit</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded-md">Delete</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    
        <!-- Create Blog Post Form -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Create Blog Post</h2>
            <form>
                <div class="bg-white shadow-md p-4 rounded-lg">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
                        <input class="border rounded w-full py-2 px-3" type="text" id="title" name="title" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="content">Content</label>
                        <textarea class="border rounded w-full py-2 px-3" name="content" id="editor" rows="4" required></textarea>
                        
                    </div>
                    <div>
                        <button class="bg-green-500 text-white px-4 py-2 rounded-md" type="submit">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
</x-layout>