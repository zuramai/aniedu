@extends('layouts.board')
@section('content')

<div class="page-achievement">
    <div class="container mx-auto">
        <h1 class="page-title">Leaderboard</h1>
    </div>
</div>


<a href="{{ route('game.home') }}" class='fixed right-16 bottom-16'>
    <img src="{{ asset('images/scribble/back.png') }}" alt="Go back" title="Go back">
</a>
@endsection