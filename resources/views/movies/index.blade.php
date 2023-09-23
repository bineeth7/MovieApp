@extends('layouts.main')


@section('content')

    <!-- <ul class="movie-list">
        @foreach($movies as $movie)
            <li class="movie">
            @if (!empty($movie['poster_path']))
                <img src="{{ $movie['poster_path'] }}" alt="{{ $movie['title'] }}" class="movie-poster">
            @endif
                <h2 class="movie-title">{{ $movie['title'] ?? 'No Title' }}</h2>
                <p class="movie-release-date">{{ $movie['release_date'] ?? 'Unknown Release Date' }}</p>
            </li>
        @endforeach
    </ul> -->


    <div class="container mx-auto px-4 pt-16">

        <!-- new releases start -->
        <div class="new-releases">
            <h2 class="uppercase tracking-wider text-cyan-400 text-lg font-semibold">New Releases</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-7">
            <!-- start first movie -->
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
            </div>
        </div>
        <!-- ends now playing -->
    </div>   
@endsection 