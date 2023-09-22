@extends('layouts.main')
@extends('layouts\main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <!-- new releases start -->
        <div class="new-releases">
            <h2 class="uppercase tracking-wider text-cyan-400 text-lg font-semibold">New Releases</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-7">
    
    <!-- start first movie -->
    <h1>Popular Movies</h1>
    <ul class="movie-list">
        @foreach($movies as $movie)
            <li class="movie">
            <!-- @if (!empty($movie['poster_path'])) -->
                <img src="{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}" class="movie-poster">
            <!-- @endif -->
                <h2 class="movie-title">{{ $movie['title'] ?? 'No Title' }}</h2>
                <p class="movie-release-date">{{ $movie['release_date'] ?? 'Unknown Release Date' }}</p>
            </li>
        @endforeach
    </ul>
    
            <div class="mt-8">
                    <a href="#">
                        <img src="/images/fridaynightplan.jpg" alt="Friday Night Plan" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="movie" class="text-lg mt-2 hover:text-gray-400">Friday Night Plan</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                           <span>2023</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 13+</span>
                            <span>|</span>
                            <span class="mx-1">1h 49m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                        Drama/Comedy
                    </div>
                    </div>
                </div>
                <!-- end first movie -->
            </div>  <!-- first row end -->

                <div class="mt-8">
                    <a href="#">
                        <img src="/images/heartofstone.jpg" alt="Heart of Stone" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Heart of Stone</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2023</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 13+</span>
                            <span>|</span>
                            <span class="mx-1">2h 5m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                        Action/Mystery
                        </div>
                    </div>
                </div>
                 
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/miraculousladybug&catnoirthemovie.jpg" alt="Miraculous: Ladybug & Cat Noir, The Movie" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Miraculous: Ladybug & Cat Noir, The Movie</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2023</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 7+</span>
                            <span>|</span>
                            <span class="mx-1">1h 42m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                        Adventure/Animation
                       </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/areyoutheregodit'smemargaret.jpg" alt="Are You There God? It's Me, Margaret" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Are You There God? It's Me, Margaret</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2023</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 13+</span>
                            <span>|</span>
                            <span class="mx-1">1h 46m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                        Drama/Comedy
                        </div>
                    </div>
                </div>
    
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/themonkeyking.jpg" alt="The Monkey King" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">The Monkey King</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2023</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 7+</span>
                            <span>|</span>
                            <span class="mx-1">1h 36m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                        Fantasy/Family
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/bro.jpg" alt="Bro" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Bro</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2023</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 13+</span>
                            <span>|</span>
                            <span class="mx-1">2h 11m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                        Fantasy/Comedy
                        </div>
                </div>
            </div>
        </div>  
        <!-- end new releases -->
        <!-- now playing start -->
        <div class="now-playing">
            <h2 class="uppercase tracking-wider text-cyan-400 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-7">
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/standbymedoraemon2.jpg" alt="STAND BY ME Doraemon 2" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">STAND BY ME Doraemon 2</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2020</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 7+</span>
                            <span>|</span>
                            <span class="mx-1">1h 37m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Sci-fi/Family
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/thebossbaby.jpg" alt="The Boss Baby" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">The Boss Baby</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2017</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 7+</span>
                            <span>|</span>
                            <span class="mx-1">1h 37m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Family/Comedy
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/doraandthelostcityofgold.jpg" alt="Dora and the Lost City of Gold" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Dora and the Lost City of Gold</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2019</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 7+</span>
                            <span>|</span>
                            <span class="mx-1">1h 45m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Comedy/Action
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/jurassicworldfallenkingdom.jpg" alt="Jurassic World: Fallen Kingdom" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Jurassic World: Fallen Kingdom</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2018</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 16+</span>
                            <span>|</span>
                            <span class="mx-1">1h 45m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action/Sci-fi
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/theangrybirdsmovie2.jpg" alt="The Angry Birds Movie 2" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">The Angry Birds Movie 2</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2019</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 7+</span>
                            <span>|</span>
                            <span class="mx-1">1h 36m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Family/Comedy
                        </div>

                    </div>
                </div> <!-- first row end -->
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/thebossbabyfamilybusiness.jpg" alt="The Boss Baby: Family Business" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">The Boss Baby: Family Business</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2021</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 7+</span>
                            <span>|</span>
                            <span class="mx-1">1h 47m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Comedy/Family
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/tujhoothimainmakkar.jpg" alt="Tu Jhoothi Main Makkaar" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Tu Jhoothi Main Makkaar</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2023</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 13+</span>
                            <span>|</span>
                            <span class="mx-1">2h 39m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Romance/Comedy
                        </div>

                    </div>
                </div>
                
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/kantara(hindi).jpg" alt="Kantara (Hindi)" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Kantara (Hindi)</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2022</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 16+</span>
                            <span>|</span>
                            <span class="mx-1">2h 27m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                        Action/Adventure/Drama
                        </div>
                    </div>
                </div>
    
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/sir(hindi).jpg" alt="Sir (Hindi)" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Sir (Hindi)</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2023</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 13+</span>
                            <span>|</span>
                            <span class="mx-1">2h 14m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action/Drama
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="#">
                        <img src="/images/raw(hindi).jpg" alt="Raw (Hindi)" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-400">Raw (Hindi)</a>
                        <div class="flex item-center tect-gray-400 text-sm mt-2">
                            <span>2022</span>
                            <span class="ml-1">|</span>
                            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
                            <span class="mx-1">U/A 7+</span>
                            <span>|</span>
                            <span class="mx-1">2h 14m</span>
                        </div>
                        <div class="text-gray-400 text-sm">
                            Action/Crime
                        </div>
                    </div>
                </div>
        </div> <!-- ends now playing -->
    </div>
<!-- </div> -->
@endsection 
