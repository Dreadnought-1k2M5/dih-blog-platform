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
</x-layout>