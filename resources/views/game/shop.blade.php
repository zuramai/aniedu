@extends('layouts.board')

@section('content')

<div class="page-shop">
    <div class="page-topbar">
        <div class="user flex items-center">
            <div class="user__avatar bg-white w-20  h-20 mr-5 flex items-end justify-center rounded-full overflow-hidden">
                <img src="{{ asset('images/avatar/'.Auth::user()->avatar_url) }}" alt="Avatar" class='rounded-sm w-16 h-16'>
            </div>
            <div class="user__name">
                <h6 class='text-white text-4xl'>{{ Auth::user()->name }}</h6>
            </div>
        </div>
        <div class="user-gold items-center">
            <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
            <h5 class='user-gold-value'>{{ Auth::user()->gold }}</h5>
        </div>
    </div>
    <div class="container mx-auto">
        <h1 class="page-title">SHOP</h1>

        <form action="" method="POST">
        @csrf
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                    <button class='w-full' type='submit' name="item" value="1" onclick="checkBalance(event, 200)">
                        <div class="item flex items-center justify-center">
                            <img src="{{ asset('images/illustration/heart.png') }}" class='achievement-image'>
                            <h5 class='max'>Max: 2x</h5>
                            <div class="price">
                                <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                                <h2 class='the-price'>200</h2>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                    <button class='w-full' type='submit' name="item" value="2" onclick="checkBalance(event, 200)">
                        <div class="item flex items-center justify-center">
                            <img src="{{ asset('images/illustration/waktu.png') }}" class='achievement-image'>
                            <h5 class='max'>Max: 10x</h5>
                            <div class="price">
                                <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                                <h2 class='the-price'>100</h2>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                    <button class='w-full' type='submit' name="item" value="3" onclick="checkBalance(event, 500)">
                        <div class="item flex items-end justify-center">
                            <img src="{{ asset('images/avatar/2.png') }}" class='achievement-image'>
                            <h5 class='max'>Max: 1x</h5>
                            <div class="price">
                                <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                                <h2 class='the-price'>500</h2>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                    <button class='w-full' type='submit' name="item" value="4" onclick="checkBalance(event, 500)">
                        <div class="item flex items-end justify-center">
                            <img src="{{ asset('images/avatar/3.png') }}" class='achievement-image'>
                            <h5 class='max'>Max: 1x</h5>
                            <div class="price">
                                <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                                <h2 class='the-price'>500</h2>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                    <button class='w-full' type='submit' name="item" value="5" onclick="checkBalance(event, 500)">
                        <div class="item flex items-end justify-center">
                            <img src="{{ asset('images/avatar/4.png') }}" class='achievement-image'>
                            <h5 class='max'>Max: 1x</h5>
                            <div class="price">
                                <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                                <h2 class='the-price'>500</h2>
                            </div>
                        </div>
                    </button>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 p-5">
                    <button class='w-full' type='submit' name="item" value="6" onclick="checkBalance(event, 1000)">
                        <div class="item flex items-end justify-center">
                            <img src="{{ asset('images/avatar/5.png') }}" class='achievement-image mx-auto'>
                            <h5 class='max'>Max: 1x</h5>
                            <div class="price">
                                <img src="{{ asset('images/illustration/gold_icon.png') }}" alt="Gold icon">
                                <h2 class='the-price'>1000</h2>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<a href="{{ route('game.home') }}" class='fixed right-16 bottom-16 z-10'>
    <img src="{{ asset('images/scribble/back.png') }}" alt="Go back" title="Go back">
</a>
@endsection
@push('scripts')
<script>
@if(Session::has('error'))
    alert("{{Session::get('error')}}")
@elseif(Session::has('success'))
    alert("{{Session::get('success')}}")
@endif
function checkBalance(event,minBalance) {
    if({{ Auth::user()->gold }} >= minBalance) {
        confirm('Apakah anda yakin ingin membeli?')
    } else {
        event.preventDefault();
        alert('Uang tidak cukup') 
    } 
}
</script>
@endpush