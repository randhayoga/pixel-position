<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class= "bg-brand text-white font-display">
    <div class="px-10">
        <nav class="flex justify-between py-3">
            <div class="flex space-x-5 font-medium">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}">
                </a>
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div class="space-x-5 flex">
                @auth
                <a href="/jobs/create">Create Job</a>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="bg-red-800 rounded px-2 cursor-pointer">Sign out</button>
                </form>
                @endauth
                @guest
                <a href="/register">Register</a>
                <a href="/login">Sign In</a>
                @endguest
            </div>
        </nav>
        <main class="max-w-246.5 mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>