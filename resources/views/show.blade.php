@extends('layouts.main')

@section('content')
<<<<<<< HEAD
    <div class="movie-info border-b border-cyan-400">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex:row">
            <img src="/images/fridaynightplan.jpg" alt="Friday Night Plan" class="w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">Friday Night Plan (2023)</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm mt-1">
                    <span><img src="/images/star.png" alt="" class="w-4 ml-1"></span>
                    <span class="mx-1">U/A 13+</span>
                    <span>|</span>
                    <span class="mx-1">1h 49m</span>
                    <span>|</span>
                    <span class="mx-1">Drama/Comedy</span>
                </div>
                <p class="mt-8">
                When their mother takes off on a business trip, two bickering brothers unite to secretly attend the hottest party of the year before she returns.
                </p>
                <div class="t-12 mt-12 flex flex-row">
                    <div>
                        <h4 class="font-semibold">Director:</h4>
                        <div class="mt-2">
                            <span class="text-gray-300">Vatsal Neelakantan</span>
                        </div>
                    </div>
                    <div class="sm:ml-2 md:ml-7">
                        <h4 class= "font-semibold">Writers:</h4>
                        <div class="mt-2">
                            <div class="text-gray-300">Vatsal Neelakantan, Sapan Verma</div>
                        </div>
=======
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
>>>>>>> ui
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


            <!-- Trailer -->
            @if (count($movie['videos']['results']) > 0)
            <div class="mt-10">
                <a href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}">
                    <button class="flex items-center bg-red-700 rounded font-semibold px-5 py-4 hover:bg-red-800 transition ease-in-out duration-150">
                        <img src="/images/playicon.png" alt="play icon" class="w-7">
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </a>
            </div>
            @endif
            <!-- Trailer ends -->

        </div>
    </div>
</div> <!--  end movie-info -->

<!-- Cast -->
<div class="movie-cast border-b border-cyan-400">
    <div class="container mx-auto px-4 py-10">
        <h2 class="text-4xl font-semibold text-cyan-400">Cast</h2>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-8 gap-5">
            
            @foreach ($movie['credits']['cast'] as $cast)
            @if ($loop ->index <8)
            <div class="mt-8">
                <a href="#">
                    <img src="{{ 'https://image.tmdb.org/t/p/w300'.$cast['profile_path'] }}" alt="" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                <div class="mt-2">
                    <a href="#" class="text-lg mt-2 hover:text-gray-400">{{ $cast['original_name']}}</a>
                        <div class="text-gray-400 text-sm">
                            {{ $cast['character']}}
                        </div>
                </div>
            </div>
            @endif
            @endforeach

        </div>
    </div>
</div>
<!-- Cast end -->

</div>

@endsection