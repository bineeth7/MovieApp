@extends('layouts.main')


@section('content')

    <div class="container mx-auto px-4 pt-16">
        <!-- new releases start -->
        <div class="new-releases">
            <h2 class="uppercase tracking-wider text-cyan-400 text-lg font-semibold">New Releases</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-7">
            <!-- start movie loop-->
            @foreach($popularMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
            <!-- end movie loop-->
            </div>  
        </div>
        <!-- end new releases -->

        <!-- now playing start -->
        <div class="now-playing">
            <h2 class="uppercase tracking-wider text-cyan-400 text-lg font-semibold">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-7">
            <!-- start movie loop-->
            @foreach($nowPlayingMovies as $movie)
                <x-movie-card :movie="$movie" :genres="$genres"/>
            @endforeach
            <!-- end movie loop-->
            </div>
        </div>
        <!-- ends now playing -->
    </div>   
@endsection 
