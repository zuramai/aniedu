@extends('layouts.board')

@section('content')
<div class="page-home">
    {{-- Navbar --}}
    <nav class="nav">
        <div class="container mx-auto">
            <ul class="flex justify-end">
                <li><a href="{{ route('game.shop') }}" class='text-white ml-16 lg:text-4xl text-xl'>shop</a></li> 
                <li><a href="{{ route('game.achievement') }}" class='text-white ml-16 lg:text-4xl text-xl'>achievement</a></li> 
                <li><a href="{{ route('game.leaderboard') }}" class='text-white ml-16 lg:text-4xl text-xl'>Leaderboard</a></li> 
            </ul>
        </div>
    </nav>
    <main class="content">
        <div class="container mx-auto">
            <div class="flex">
                <div class="w-1/2 hidden sm:block">
                    <img src="{{ asset('images/illustration/home.png') }}" alt="Girl" class="mx-auto">
                </div>
                <div class="w-1/2">
                    <div class="text-right mt-32">
                        <h1 class='text-white'>Welcome, User 12345</h1>
                        <h1 class='text-4xl text-gray-300'>Let's Play</h1>
                        
                        <a href="#" class='btn btn-primary mt-48 inline-block'>Start</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection