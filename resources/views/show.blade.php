@extends('layouts.main')

@section('content')
<div class="movie-info border-b border-cyan-400">
    <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['backdrop_path'] }}" alt="backdrop path" class="w-96 md:shrink-0">
        <div class="md:ml-24">
            <h2 class="text-4xl font-semibold">{{ $movie['original_title']}}</h2>
            <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                <span><img src="/images/star.png" alt="" class="w-4 ml-1"></span>
                <span class="mx-1">{{ $movie['vote_average']*10 .'%'}}</span>
                <span>|</span>
                <span class="mx-1">{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
                <span>|</span>
                <span class="mx-1">
                    @foreach ($movie['genres'] as $genre)
                    {{ $genre['name'] }}@if (!$loop->last), @endif
                    @endforeach
                </span>
            </div>
            <p class="mt-8">
                {{ $movie['overview']}}
            </p>

            <!-- Director & Producers details -->

            <div class="t-12 mt-12">
                <h4 class="text-gray-300 font-semibold">Featured Crew:</h4>
                <div class="flex mt-3">
                    @foreach ($movie['credits']['crew'] as $crew)
                    @if($crew['job'] == 'Director')
                    <div class="mr-8">
                        <div>{{ $crew['job']}}</div>
                        <div class="text-gray-300">{{ $crew['name']}}</div>
                    </div>
                    @endif
                    @endforeach

                    @foreach ($movie['credits']['crew'] as $crew)
                    @if($crew['job'] == 'Producer')
                    <div class="mr-8">
                        <div>{{ $crew['job']}}</div>
                        <div class="text-gray-300">{{ $crew['name']}}</div>
                    </div>
                    @break
                    @endif
                    @endforeach
                </div>
            </div>


            <!-- Director & Producers details end -->



            <div class="mt-10">
                <a href="https://youtu.be/Lz_jlyGDoqM?si=0TTaNNnx4xoklMMs">
                    <button class="flex items-center bg-red-700 rounded font-semibold px-5 py-4 hover:bg-red-800 transition ease-in-out duration-150">
                        <img src="/images/playicon.png" alt="play icon" class="w-7">
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </a>
            </div>
        </div>
    </div>
</div> <!--  end movie-info -->

<div class="movie-cast border-b border-cyan-400">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold text-cyan-400">Cast</h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-5">
            <div class="mt-8">
                <a href="#">
                    <img src="/images/cast/babil.jpg" alt="Babil" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">Babil Khan</a>
                    <!-- <div class="text-gray-400 text-sm">
                            Movie name
                        </div> -->
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/images/cast/medha.jpg" alt="Medha" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">Medha Rana</a>
                    <!-- <div class="text-gray-400 text-sm">
                            Movie name
                        </div> -->
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/images/cast/aadhya.jpg" alt="Aadhya" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">Aadhya Anand</a>
                    <!-- <div class="text-gray-400 text-sm">
                            Sci-fi/Family
                        </div> -->
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/images/cast/juhi.jpg" alt="Juhi" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">Juhi Chawla</a>
                    <!-- <div class="text-gray-400 text-sm">
                            Sci-fi/Family
                        </div> -->
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/images/cast/amrith.png" alt="Amrith" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">Amrith Jayan</a>
                    <!-- <div class="text-gray-400 text-sm">
                            Sci-fi/Family
                        </div> -->
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/images/cast/ninad.jpg" alt="Ninad" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">Ninad Kamat</a>
                    <!-- <div class="text-gray-400 text-sm">
                            Sci-fi/Family
                        </div> -->
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/images/cast/veenah.jpg" alt="Veenah" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">Veenah Nair</a>
                    <!-- <div class="text-gray-400 text-sm">
                            Sci-fi/Family
                        </div> -->
                </div>
            </div>
            <div class="mt-8">
                <a href="#">
                    <img src="/images/cast/vivek.jpg" alt="Vivek" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">Vivek Tandon</a>
                    <!-- <div class="text-gray-400 text-sm">
                            Sci-fi/Family
                        </div> -->
                </div>
            </div>


        </div>
    </div>
</div>
</div>

@endsection