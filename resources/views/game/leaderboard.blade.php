@extends('layouts.board')
@section('content')

<div class="page-leaderboard">
    <div class="container mx-auto">
        <h1 class="page-title mb-12">Leaderboard</h1>

        <div class="page-content">
            <div class="flex">
                <div class="w-full md:w-1/2 px-24">
                    <ul>
                    @foreach($plays as $play)
                        <li>
                            <div class="flex  py-5 justify-between  w-full text-white text-4xl">
                                <h5 class='name'>
                                    <span class="number mr-12">{{ $loop->iteration }}.</span>
                                    {{ $play->user->name }}
                                </h5>
                                <h5 class='score'>{{ $play->score }}</h5>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<a href="{{ route('game.home') }}" class='fixed right-16 bottom-16'>
    <img src="{{ asset('images/scribble/back.png') }}" alt="Go back" title="Go back">
</a>
@endsection