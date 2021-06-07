@extends('layouts.board')

@section('content')
<div class="page-play">
    <div class="page-header flex flex-wrap items-center justify-center md:justify-between w-full">
        <div class="user flex items-center">
            <div class="user__avatar bg-white w-28  h-28 mr-5 flex items-end justify-center rounded-full overflow-hidden">
                <img src="{{ asset('images/avatar/'.Auth::user()->avatar_url) }}" alt="Avatar" class='rounded-sm w-24 h-24 object-contain'>
            </div>
            <div class="user__name">
                <h6 class='text-white text-4xl'>{{ Auth::user()->name }}</h6>
                <p class='text-lg text-white'> Score: {{ $lastPlay ? $lastPlay->score : 0 }}</p>
            </div>
        </div>
    </div>
    <h1 class='text-white text-center'>Mini Games</h1>

    <mini-games user="{{ Auth::user()->id }}" subject="{{ Request::get('subject') }}"/>
</div>
@endsection