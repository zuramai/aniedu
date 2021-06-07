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
        <Nyawa start="{{ Auth::user()->nyawa }}"/>
    </div>
    <div class="container mx-auto pt-32">
        <game-play subject="{{ Request::get('subject') }}" time="{{Auth::user()->time}}" question-list="{{ json_encode($questions) }}" user_id="{{Auth::user()->id}}" start-nyawa="{{ Auth::user()->nyawa }}"/>
    </div>
</div>


@endsection