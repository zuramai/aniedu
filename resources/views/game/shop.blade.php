@extends('layouts.board')

@section('content')

<div class="page-achievement">
    <div class="container mx-auto">
        <h1 class="page-title">Shop</h1>

        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="item flex items-center justify-center">
                    <img src="{{ asset('images/illustration/heart.png') }}" class='achievement-image'>
                    <h5 class='max'>Max: 2x</h5>
                    <div class="price">
                        <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                        <h2 class='the-price'>200</h2>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="item flex items-center justify-center">
                    <img src="{{ asset('images/illustration/waktu.png') }}" class='achievement-image'>
                    <h5 class='max'>Max: 10x</h5>
                    <div class="price">
                        <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                        <h2 class='the-price'>100</h2>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="item flex items-end justify-center">
                    <img src="{{ asset('images/avatar/2.png') }}" class='achievement-image'>
                    <h5 class='max'>Max: 1x</h5>
                    <div class="price">
                        <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                        <h2 class='the-price'>500</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="item flex items-end justify-center">
                    <img src="{{ asset('images/avatar/3.png') }}" class='achievement-image'>
                    <h5 class='max'>Max: 1x</h5>
                    <div class="price">
                        <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                        <h2 class='the-price'>500</h2>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="item flex items-end justify-center">
                    <img src="{{ asset('images/avatar/4.png') }}" class='achievement-image'>
                    <h5 class='max'>Max: 1x</h5>
                    <div class="price">
                        <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                        <h2 class='the-price'>500</h2>
                    </div>
                </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                <div class="item flex items-end justify-center">
                    <img src="{{ asset('images/avatar/5.png') }}" class='achievement-image mx-auto'>
                    <h5 class='max'>Max: 1x</h5>
                    <div class="price">
                        <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                        <h2 class='the-price'>500</h2>
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