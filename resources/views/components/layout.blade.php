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
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}">
                </a>
            </div>
            <div class="space-x-5 font-medium">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div class="space-x-5">
                <a href="">Sign In</a>
                <a href="">Create Job</a>
                <a href="">Sign Out</a>
            </div>
        </nav>
        <main class="max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>