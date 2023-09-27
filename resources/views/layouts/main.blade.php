<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="font-sans bg-black text-white">
    <nav class="border-b border-cyan-400 bg-gradient-to-r from-fuchsia-800 from-5% via-fuchsia-950 via-35% to-black to-90% ...">
        <div class="container mx-auto flex items-center justify-between px-4 py-4">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">
                    <img class="w-7 h=7" src="https://img.icons8.com/metro/26/movie-projector.png" alt="movie-projector"/>
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
                <div class="relative mt-3 md:mt-0">
                    <input type="text" class="bg-pink-50 text-black italic text-sm rounded-full w-64 px-4 pl-10 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
                    <div class="absolute top-0">
                    <svg class="w-5 ml-2 mt-1 text-gray-500" xmlns="http://www.w3.org/2000/svg"  style="fill:#000" viewBox="0 0 256 256"><g fill="none" stroke-miterlimit="10" font-family="none" font-size="none" font-weight="none" style="mix-blend-mode:normal" text-anchor="none"><path fill="#b6c9d6" d="M248 237.824c0 2.72-1.056 5.28-2.976 7.2-3.968 3.968-10.416 3.968-14.384 0l-123.408-129.44 8.416-8.4 129.52 123.584c1.776 1.792 2.832 4.336 2.832 7.056z"/><path fill="#788b9c" d="m172.976 172.944 66.384 63.344c.432.432.64.944.64 1.536 0 .416-.112 1.008-.64 1.536-.848.848-2.224.848-2.8.272l-63.584-66.688M96.048 115.44l128.928 135.232c7.104 7.104 18.608 7.104 25.696 0 3.552-3.536 5.328-8.192 5.328-12.848a18.1 18.1 0 0 0-5.328-12.848L115.52 96l-19.472 19.44z"/><path fill="#d1edff" d="M8 96c0 48.601 39.399 88 88 88s88-39.399 88-88S144.601 8 96 8 8 47.399 8 96z"/><path fill="#788b9c" d="M16 96c0-44.112 35.888-80 80-80s80 35.888 80 80-35.888 80-80 80-80-35.888-80-80M0 96c0 53.024 42.976 96 96 96s96-42.976 96-96S149.024 0 96 0 0 42.976 0 96z"/></g></svg>                
                    </div>
                </div>  
                <div class="md:ml-4 mt-3 md:mt-0">
                    <a href="#">
                        <img src="/images/avatar.jpg" alt="avatar" class="rounded-full w-8 h-8">
                    </a>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
</body>
</html>