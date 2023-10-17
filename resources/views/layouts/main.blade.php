<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Verse</title>
    <link rel="icon" href="/images/MovieAppIcon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @livewireStyles
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="font-sans bg-black text-white">
    <nav class="border-b border-cyan-400 bg-gradient-to-r from-fuchsia-800 from-5% via-fuchsia-950 via-35% to-black to-90% ...">
        <div class="container mx-auto flex items-center justify-between px-4 py-4">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">
                        <img class="w-7 h=7" src="https://img.icons8.com/metro/26/movie-projector.png" alt="movie-projector" />
                    </a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-400">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-400">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="#" class="hover:text-gray-400">Actors</a>
                </li>
            </ul>
            <div class="flex flex-col sm:flex-row md:flex-row items-center">
                    <livewire:search-dropdown /> 
                    <div class="md:ml-4 mt-3 md:mt-0">
                        <a href="#">
                            <img src="/images/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                        </a>
                    </div>
            </div>
        </div>
    </nav>
    @yield('content')
    @livewireScripts
</body>

</html>