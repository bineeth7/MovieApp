<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen = false">
    <input 
        wire:model.live.debounce.500ms="search"
        type="text" name="search"
        class="bg-pink-50 text-black italic text-sm rounded-full w-64 px-4 pl-10 py-1 focus:outline-none focus:shadow-outline"
        placeholder="Search"
        @focus="isOpen = true"
        @keydown="isOpen = true"
        @keydown.escape.window="isOpen = false"
        @keydown.shift.tab="isOpen = false"
    >
    <!-- search icon -->
    <div class="absolute top-0">
        <svg class="w-5 ml-2 mt-1 text-gray-500" xmlns="http://www.w3.org/2000/svg" style="fill:#000" viewBox="0 0 256 256">
            <g fill="none" stroke-miterlimit="10" font-family="none" font-size="none" font-weight="none" style="mix-blend-mode:normal" text-anchor="none">
                <path fill="#b6c9d6" d="M248 237.824c0 2.72-1.056 5.28-2.976 7.2-3.968 3.968-10.416 3.968-14.384 0l-123.408-129.44 8.416-8.4 129.52 123.584c1.776 1.792 2.832 4.336 2.832 7.056z" />
                <path fill="#788b9c" d="m172.976 172.944 66.384 63.344c.432.432.64.944.64 1.536 0 .416-.112 1.008-.64 1.536-.848.848-2.224.848-2.8.272l-63.584-66.688M96.048 115.44l128.928 135.232c7.104 7.104 18.608 7.104 25.696 0 3.552-3.536 5.328-8.192 5.328-12.848a18.1 18.1 0 0 0-5.328-12.848L115.52 96l-19.472 19.44z" />
                <path fill="#d1edff" d="M8 96c0 48.601 39.399 88 88 88s88-39.399 88-88S144.601 8 96 8 8 47.399 8 96z" />
                <path fill="#788b9c" d="M16 96c0-44.112 35.888-80 80-80s80 35.888 80 80-35.888 80-80 80-80-35.888-80-80M0 96c0 53.024 42.976 96 96 96s96-42.976 96-96S149.024 0 96 0 0 42.976 0 96z" />
            </g>
        </svg>
    </div>
    <div wire:loading class="absolute top-0 right-0">
    <!-- search icon end -->
        <!-- spinner -->
        <svg aria-hidden="true" class="w-6 h-6 mt-0.5 mr-0.5 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
        </svg>
        <span class="sr-only">Loading...</span>
    </div>
    <!-- spinner end -->
    <!-- search dropdown -->
    <div 
        class="z-50 absolute bg-gray-900 bg-opacity-50 text-sm rounded w-64 mt-1"
        x-show.transition.opacity="isOpen"
        @keydown.escape.window="isOpen = false"    
    >
        <ul>
            @if(isset($searchResults['results']) && count($searchResults['results']) > 0)
            @foreach(collect($searchResults['results'])->take(7) as $result)
            <li class="border-b border-cyan-400">
                <a 
                    href="{{ route('movies.show', ['id' => $result['id']]) }}"
                    class="hover:bg-gray-900 px-3 py-3 flex items-center"
                    @if ($loop->last) @keydown.tab="isOpen = false" @endif
                >
                    @if($result['poster_path'])
                    <img src="https://image.tmdb.org/t/p/w92/{{ $result['poster_path']}}" alt="poster" class="w-8">
                    @else
                    <img src="https:://via.placeholder.com/50x75" alt="poster" class="w-8">
                    @endif
                    <span class="ml-4">{{ $result['title'] }}</span>
                </a>
            </li>
            @endforeach
            @elseif(!empty($search))
            <li>No results found for "{{ $search }}"</li>
            @endif
        </ul>
    </div>
    <!-- search dropdown end -->
</div>