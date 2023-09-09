@extends('layouts.main')

@section('content')
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
                    </div>
                </div>
                <div class="mt-12">
                  <a href="https://youtu.be/Lz_jlyGDoqM?si=0TTaNNnx4xoklMMs">
                    <button class="flex items-center bg-red-700 rounded font-semibold px-5 py-4 hover:bg-red-800 transition ease-in-out duration-150">
                        <img src="/images/playicon.png" alt="play icon" class="w-7">
                        <span class="ml-2">Play Trailer</span>
                    </button>
                    </a>
                </div>
            </div>
        </div>  
    </div>  <!--  end movie-info -->

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