@extends('layouts.board')

@section('content')


<main id="page-content">
    <h1 class="page-title pt-24">Sign Up</h1>

    <form class="auth-form" action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama" class=''>
        <input type="email" name="email" placeholder="Email" class=''>
        <input type="password" name="password" placeholder="Password" class=''>

        <a href="{{ url('login') }}" class='text-center underline block mt-5 mb-8'>Already have an account?</a>
        <div class="text-center">
            <button class="btn-primary">PLAY</button>
        </div>
    </form>
</main>

@endsection