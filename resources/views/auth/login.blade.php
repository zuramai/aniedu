@extends('layouts.board')

@section('content')


<main id="page-content">
    <h1 class="page-title pt-24">Login</h1>

    <form class="auth-form" action="" method='POST'>
        @csrf
        @error("password")
            <p class='mb-2'>Error: user not found</p>
        @enderror
        <input type="text" name="name" placeholder="Nama" class=''>
        <input type="password" name="password" placeholder="Password" class=''>

        <a href="{{ url('sign-up') }}" class='text-center underline block mt-5 mb-8'>I don't have an account</a>
        <div class="text-center">
            <button class="btn-primary">PLAY</button>
        </div>
    </form>
</main>

@endsection