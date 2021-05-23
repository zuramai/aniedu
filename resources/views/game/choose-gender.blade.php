@extends('layouts.board')
@section('content')

<div class="page-choose-gender">
    <div class="container mx-auto">
        <h1 class="page-title">Kamu Perempuan atau Laki-laki?</h1>

        <form action="" method="POST">
            @csrf
            <div class="flex">
                <div class="w-1/2">
                    <button name="gender" value="F" type="submit" class='flex flex-col w-full'>
                        <img src="{{ asset('images/choose-gender/female.png') }}" alt="Male">
                        <h1 class='text-center text-white'>Perempuan</h1>
                    </button>
                </div>
                <div class="w-1/2">
                    <button name="gender" value="M" type="submit" class='flex flex-col w-full'>
                        <img src="{{ asset('images/choose-gender/male.png') }}" alt="Male">
                        <h1 class='text-center text-white'>Laki-laki</h1>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


<a href="{{ route('game.home') }}" class='fixed right-16 bottom-16'>
    <img src="{{ asset('images/scribble/back.png') }}" alt="Go back" title="Go back">
</a>
@endsection