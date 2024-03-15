@extends('layouts.app')

@section('content')
    <!-- Background Section -->
    <div class="bg-cover bg-center grid grid-cols-1 m-auto" style="background-image: url('/path-to-background-image.jpg');">
        <div class="flex justify-center items-center pt-10">
            <div class="pt-4 pb-16 w-4/5 text-center">
                <h1 class="text-white text-5xl uppercase font-bold pb-14">
                    Rank Up in Teamfight Tactics
                </h1>
                <a href="/blog" class="bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase rounded-lg shadow">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <!-- Blog Section -->
    <div class="grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <!-- Left Image -->
        <div>
            <img src="https://i.ytimg.com/vi/-Ukq9bxiu8M/maxresdefault.jpg" class="w-full" alt="Teamfight Tactics Gameplay">
        </div>
        <!-- Right Text Content -->
        <div class="flex flex-col justify-center w-4/5">
            <h2 class="text-3xl font-extrabold text-black">
                New To Teamfight Tactics? Here's What You Need To Know
            </h2>
            
            <p class="py-8 text-gray-500">
                Teamfight Tactics is an autochess gamemode in League of Legends. It is a turn-based game that pits you against seven opponents, and the goal is to be the last one standing.
            </p>

            <p class="font-extrabold text-gray-600 pb-9">
                As a new player to Teamfight Tactics, you will need to know the basics of the game. This blog will help you understand the game and give you tips on how to win.
            </p>

            <a href="/blog" class="bg-blue-500 text-white text-lg font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <!-- Gradient Background Section -->
    <div class="p-15 text-center bg-gradient-to-b from-purple-400 via-pink-500 to-red-500 text-white">
        <!-- Content -->
    </div>

    <!-- Additional Content Sections ... -->

@endsection
