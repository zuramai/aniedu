@extends('layouts.board')
@section('content')

<div class="page-play">
    <div class="page-header flex flex-wrap items-center justify-center md:justify-between w-full">
        <div class="user flex items-center">
            <div class="user__avatar bg-white w-28  h-28 mr-5 flex items-end justify-center rounded-full overflow-hidden">
                <img src="{{ asset('images/avatar/'.Auth::user()->avatar_url) }}" alt="Avatar" class='rounded-sm w-24 h-24'>
            </div>
            <div class="user__name">
                <h6 class='text-white text-4xl'>{{ Auth::user()->name }}</h6>
                <p class='text-lg '> Score: {{ $lastPlay ? $lastPlay->score : 0 }}</p>
            </div>
        </div>
        <div class="lifes flex mt-10 sm:mt-0 gap-3">
            @for($i=1;$i<=5;$i++)
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-heart-fill  {{ $i <= Auth::user()->nyawa ? 'text-red-500' : '' }}" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
            </svg>
            @endfor
        </div>
    </div>
    <div class="container mx-auto pt-32">
        <game-play question-list="{{ json_encode($questions) }}" user_id="{{Auth::user()->id}}"/>
    </div>
</div>


@endsection