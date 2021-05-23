@extends('layouts.board')

@section('content')

<div class="page-achievement">
    <div class="container mx-auto">
        <h1 class="page-title">Achievement</h1>

        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="achievement {{ $play_count >= 5 ? 'unlocked' : '' }}">
                    <img src="{{ asset('images/achievement/1.JPG') }}" class='achievement-image'>
                    <div class="locked">
                        <img src="{{ asset('images/scribble/lock.png') }}" alt="Locked">
                        <div class="text-white absolute text-center w-full bottom-10 text-2xl">
                            <h4>Play 5x to unlock</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="achievement {{ $play_count >= 15 ? 'unlocked' : '' }}">
                    <img src="{{ asset('images/achievement/2.JPG') }}" class='achievement-image'>
                    <div class="locked">
                        <img src="{{ asset('images/scribble/lock.png') }}" alt="Locked">
                        <div class="text-white absolute text-center w-full bottom-10 text-2xl">
                            <h4>Play 15x to unlock</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="achievement {{ $play_count >= 20 ? 'unlocked' : '' }}">
                    <img src="{{ asset('images/achievement/3.JPG') }}" class='achievement-image'>
                    <div class="locked">
                        <img src="{{ asset('images/scribble/lock.png') }}" alt="Locked">
                        <div class="text-white absolute text-center w-full bottom-10 text-2xl">
                            <h4>Play 20x to unlock</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="achievement {{ $play_count >= 25 ? 'unlocked' : '' }}">
                    <img src="{{ asset('images/achievement/4.JPG') }}" class='achievement-image'>
                    <div class="locked">
                        <img src="{{ asset('images/scribble/lock.png') }}" alt="Locked">
                        <div class="text-white absolute text-center w-full bottom-10 text-2xl">
                            <h4>Play 25x to unlock</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="achievement {{ $play_count >= 30 ? 'unlocked' : '' }}">
                    <img src="{{ asset('images/achievement/5.JPG') }}" class='achievement-image'>
                    <div class="locked">
                        <img src="{{ asset('images/scribble/lock.png') }}" alt="Locked">
                        <div class="text-white absolute text-center w-full bottom-10 text-2xl">
                            <h4>Play 30x to unlock</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="achievement  {{ $play_count >= 50 ? 'unlocked' : '' }}">
                    <img src="{{ asset('images/achievement/6.png') }}" class='achievement-image mx-auto'>
                    <div class="locked">
                        <img src="{{ asset('images/scribble/lock.png') }}" alt="Locked">
                        <div class="text-white absolute text-center w-full bottom-10 text-2xl">
                            <h4>Play 50x to unlock</h4>
                            <h4>GET PACK 2 STICKER WA</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="{{ route('game.home') }}" class='fixed right-16 bottom-16'>
    <img src="{{ asset('images/scribble/back.png') }}" alt="Go back" title="Go back">
</a>
@endsection