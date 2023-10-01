<div class="mt-8">
    <a href="{{ route('movies.show', $movie['id']) }}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="{{ route('movies.show', $movie['id']) }}" class="text-lg mt-2 hover:text-gray-400">{{ $movie['original_title']}}</a>
        <div class="flex item-center tect-gray-400 text-sm mt-2">
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
            <span class="ml-1">|</span>
            <span><img src="/images/star.png" alt="" class="w-3 mt-1 ml-1"></span>
            <span class="mx-1">{{ $movie['vote_average']*10 .'%'}}</span>
            <span>|</span>
            <span class="mx-1"></span>
        </div>
        <div class="text-gray-400 text-sm">@foreach($movie['genre_ids'] as $genre){{$genres->get($genre)}}@if(!$loop->last),@endif @endforeach</div>
    </div>
</div>
