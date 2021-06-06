@extends('layouts.board')
@section('content')

<div class="game-over h-5/6 flex items-center justify-center text-center">
    <div>
        <h1 class='text-white'>Game Over</h1>

        <div class="buttons gap-12 mt-12 flex">
            <a href="/game" class='btn btn-primary'>Kembali ke Home</a>
            <a href="/game/play" class='btn btn-primary'>Main lagi</a>
        </div>
    </div>
</div>
@endsection
@push('styles')
<style>#board{height:100vh}</style>
@endpush